
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="{{asset('css/home.css')}}"> --}}
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <section>
            <header>
                <img class="logo" src="img/logo.svg" alt="logo">
                <div class="navbar">
                    <a href="#">Home</a>
                    <a href="#">Penemuan</a>
                    <a href="#">Kehilangan</a>
                    <a href="#">Isi Laporan</a>
                    {{-- <button type="submit" {{ __('Logout') }}>Keluar</button> --}}
                    <a>
                        <form action="{{ route('logout') }}" method="POST" >
                            @csrf
                             <button type="submit" {{ __('Login') }}>Keluar</button>
                        </form>
                    </a>
                    
                </div>
            </header>
            <div class="content">
                <div class="info">
                    <h2>
                        Apa itu SILABIL?
                    </h2>
                    <P>
                        Sistem Informasi Barang Hilang atau bisa disebut Silabil adalah media untuk membantu Civitas Akademika ITERA untuk mencari barang hilang dan memberikan fasilitas bagi yang menemukan barang 
                    </P>
                    <p>
                        Gedung D ITERA, Jalan Terusan Ryacudu, Way Huwi, Kec. Jati Agung, Kab. Lampung Selatan
                    </p>
                </div>
            </div>
        </section>
    </body>
</html>