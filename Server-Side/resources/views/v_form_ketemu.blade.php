<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Penemuan Barang</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/temu.css">
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
        <div class="container">
            <div class="title">
                Lapor Penemuan Barang Disini!
            </div>
            <form action="{{ route('daftar_barang_ketemu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="user-detail">
                    <div class="input-field">
                        <label for="nama">Nama</label><br>
                        <input type="text" name="nama" value="{{ old('nama') }}" required>
                    </div>
                    <div class="input-field">
                        <label for="nim">NIM (Opsional)</label><br>
                        <input type="text" name="nim" value="{{ old('nim') }}">
                    </div>
                    <div class="input-field">
                        <label for="prodi">Prodi (Opsional)</label><br>
                        <input type="text" name="prodi" value="{{ old('prodi') }}">
                    </div>
                    <div class="input-field">
                        <label for="angkatan">Angkatan (Opsional)</label><br>
                        <input type="text" name="angkatan" value="{{ old('angkatan') }}">
                    </div>
                    <div class="input-field"> 
                        <label for="tanggal_ketemu">Tanggal Penemuan</label><br>
                        <input type="date" name="tanggal_ketemu" required>
                    </div>
                    <div class="input-field">
                        <label for="jenis">Jenis Barang</label><br>
                        <input type="text" name="jenis" value="{{ old('jenis') }}" required>
                    </div>
                    <div class="input-field">
                        <label for="spek">Spesifikasi Barang</label><br>
                        <input type="text" name="spek" value="{{ old('spek') }}" required>
                    </div>
                    <div class="input-field">
                        <label for="kronologi">Kronologi</label> <br>
                        <input name="kronologi" value="{{ old('kronologi') }}" required>
                    </div>
                    <div class="input-field">
                        <label for="gambar">Foto Barang</label> <br>
                        <input type="file" name="gambar" accept="image/png, image/jpeg, image/jpg" required>
                    </div>
                    {{-- <div class="input-field button">
                        <input type="button" value="Submit">
                    </div> --}}
                    <div class="input-field button">
                        <input type="submit" value="Submit">
                    </div>
                    {{-- <div class="input-field">
                        <button type="submit" class="btn btn-success my-2" >Submit</button>
                    </div> --}}
                </div>
            </form>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>