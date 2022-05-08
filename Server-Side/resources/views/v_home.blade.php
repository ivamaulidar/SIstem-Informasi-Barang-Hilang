<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-widht, initial-scale=1">
        <link rel="stylesheet" href="css/home.css">
        <link rel="shortcut icon" href="img/logo.svg">
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
        <div class="content">
            <div class="info">
                <h2>
                    Apa itu SILABIL?
                </h2>
                <P>
                    Sistem Informasi Barang Hilang atau bisa disebut Silabil adalah media untuk membantu Civitas Akademika ITERA untuk mencari barang hilang dan memberikan fasilitas bagi yang menemukan barang 
                </P>
                <p>
                    <ion-icon name="location-outline"></ion-icon>
                    Gedung D ITERA, Jalan Terusan Ryacudu, Way Huwi, Kec. Jati Agung, Kab. Lampung Selatan
                </p>
            </div>
            <img src="img/logo.svg" class="object">
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>
