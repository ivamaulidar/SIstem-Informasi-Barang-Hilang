<nav>
    <img class="logo" src="img/logo.svg" alt="logo">
    <ul>
        <li><a href="#">Home</a></li>
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