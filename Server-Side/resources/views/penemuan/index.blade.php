@extends('layouts.main')
@section('title','Penemuan Barang')

@if (session()->has('berhasil'))
<div class="alert alert-succes" role="alert" style="font-weight: bold">
    {{ session()->get('berhasil') }}
</div>
@endif

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Penemuan Barang</h1><br>
    <a href="{{ route('penemuan.create') }}" type="button" class="btn btn-dark my-2"><i class="fa fa-plus"></i>Tambah Data</a>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Tanggal</th>
                <th>Jenis</th>
                <th>Spesifikasi</th>
                <th>Kronologi</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $increment = 1;
            @endphp
            @foreach ($penemuan as $item)
                <tr>
                    <td>{{ $increment++ }}</td>
                    <td><img src="{{ asset('/asset/img2/'.$item->gambar) }}" style="width: 70px; height:70px"></td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->angkatan }}</td>
                    <td>{{ $item->tanggal_ketemu }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->spek }}</td>
                    <td>{{ $item->kronologi }}</td>
                    <td>  
                        <a href="{{ route('penemuan.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a><br>
                        <form action="{{ route('penemuan.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data tersebut ?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

