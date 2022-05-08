
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Barang Hilang</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-widht, initial-scale=1">
        <link rel="shortcut icon" href="img/logo.svg">
        <link rel="stylesheet" href="css/baranghilang.css">
    </head>
    <body>
        <div class="navbar">
            <nav>
                <img class="logo" src="img/logo.svg" alt="logo">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/daftar_barang_hilang">Kehilangan</a></li>
                    <li><a href="/daftar_barang_ketemu">Penemuan</a></li>
                    <li><a href="#">Isi Laporan <ion-icon name="chevron-down"></ion-icon></a>
                        <ul>
                            <li><a href="/form_kehilangan">Laporan Kehilangan</a></li>
                            <li><a href="/form_penemuan">Laporan Penemuan</a></li>
                        </ul>
                    </li>
                    @can('admin')
                    <li><a href="/admin">Admin</a></li>                        
                    @endcan
                </ul>
                <form action="{{ route('logout') }}" method="POST" >
                    @csrf
                        {{-- <button type="submit" {{ __('Login') }}>Keluar</button> --}}
                    <button type="submit" class="button" {{ __('Login') }}>
                        <span class="icon">
                            <ion-icon name="exit-outline"></ion-icon>
                        </span>
                        <span class="text">Keluar</span>
                    </button>
                </form>
            </nav>
        </div>
        <h1>Daftar Barang Hilang</h1>
        <div class="container">
            @foreach ($kehilangan as $item)
                <div class="card">
                    <div class="card-header">
                        <img src="{{ asset('/asset/img/'.$item->gambar) }}">
                    </div>
                    <div class="card-body">
                    <table>
                        <tr>
                            <td>Tanggal Hilang:</td>
                            <td>{{ $item->tanggal }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Barang:</td>
                            <td>{{ $item->jenis }}</td>
                        </tr>
                        <tr>
                            <td>Spesifikasi:</td>
                            <td>{{ $item->spek }}</td>
                        </tr>
                        <tr>
                            <td>Kronologi:</td>
                            <td>{{ $item->kronologi }}</td>
                        </tr>
                    </table>
                    </div>
                </div>
            @endforeach
            
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>
