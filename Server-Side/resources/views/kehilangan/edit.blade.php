@extends('layouts.main2')
@section('title','Edit Kehilangan Barang')

@section('content')
    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800"> Tambah Kehilangan Barang</h1><br> --}}
    
    <div class="container mt-5">
        <div class="card">
            <div class="card-header" style="font-weight: bold; color:black">Edit Kehilangan Barang</div>
            <div class="card-body">
                <form action="{{ route('kehilangan.update', $kehilangan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="{{ old('nama', $kehilangan->nama) }}" class="form-control" required>
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" value="{{ old('nim', $kehilangan->nim) }}" class="form-control">
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="prodi">Prodi</label>
                        <input type="text" name="prodi" value="{{ old('prodi', $kehilangan->prodi) }}" class="form-control">
                    
                    </div>
                    <div class="form-group mb-3">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" name="angkatan" value="{{ old('angkatan', $kehilangan->angkatan) }}" class="form-control">
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal">Tanggal Hilang</label>
                        <input type="date" name="tanggal" value="{{ old('angkatan', $kehilangan->tanggal) }}" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" value="{{ old('jenis', $kehilangan->jenis) }}" class="form-control" required>
                    
                    </div>
                    <div class="form-group mb-3">
                        <label for="spek">Spesifikasi</label>
                        <input type="text" name="spek" value="{{ old('spek', $kehilangan->spek) }}" class="form-control" required>
                    
                    </div>
                    <div class="form-group mb-3">
                        <label for="kronologi">Kronologi</label>
                        <input type="text" name="kronologi" value="{{ old('kronologi', $kehilangan->kronologi) }}" class="form-control" required>
                        {{-- <input name="kronologi" value="{{ old('kronologi') }}" class="form-control" required> --}}
                        
                    </div>
                    <div class="form-group mb-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="form-group d-flex justify-content">
                        <button type="submit" class="btn btn-success my-2" >Submit</button>
                        <br>
                        <a href="{{ route('kehilangan.index') }}" type="button" class="btn btn-primary my-2"><i class="fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </form>

            </div>
        </div>
        

    </div>
@endsection