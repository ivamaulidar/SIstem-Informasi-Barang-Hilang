@extends('layouts.main2')
@section('title','Edit Penemuan Barang')

@section('content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800"> Tambah penemuan Barang</h1><br> --}}
    
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="font-weight: bold; color:black">Edit Penemuan Barang</div>
            <div class="card-body">
                <form action="{{ route('penemuan.update', $penemuan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="{{ old('nama', $penemuan->nama) }}" class="form-control" required>
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" value="{{ old('nim', $penemuan->nim) }}" class="form-control">
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="prodi">Prodi</label>
                        <input type="text" name="prodi" value="{{ old('prodi', $penemuan->prodi) }}" class="form-control">
                    
                    </div>
                    <div class="form-group mb-3">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" name="angkatan" value="{{ old('angkatan', $penemuan->angkatan) }}" class="form-control">
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal_ketemu">Tanggal Ketemu</label>
                        <input type="date" name="tanggal_ketemu" value="{{ old('angkatan', $penemuan->tanggal_ketemu) }}" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" value="{{ old('jenis', $penemuan->jenis) }}" class="form-control" required>
                    
                    </div>
                    <div class="form-group mb-3">
                        <label for="spek">Spesifikasi</label>
                        <input type="text" name="spek" value="{{ old('spek', $penemuan->spek) }}" class="form-control" required>
                    
                    </div>
                    <div class="form-group mb-3">
                        <label for="kronologi">Kronologi</label>
                        <input name="kronologi" value="{{ old('kronologi', $penemuan->kronologi) }}" class="form-control" required>
                        {{-- <input name="kronologi" value="{{ old('kronologi') }}" class="form-control" required> --}}
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content">
                        <button type="submit" class="btn btn-success my-2" >Submit</button>
                        <br>
                        <a href="{{ route('penemuan.index') }}" type="button" class="btn btn-primary my-2"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </form>

            </div>
        </div>
        

    </div>
@endsection