@extends('layouts.main2')
@section('title','Daftar Penemuan Barang')


@section('content')
    <h1 class="h3 mb-4 text-gray-800" style="text-align: center">Daftar Penemuan Barang</h1><br>
    <div class="d-flex justify-content-center">
        @foreach ($penemuan as $item)
            <div class="card mb-3" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('/asset/img2/'.$item->gambar) }}" class="img-fluid rounded-start" >
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Jenis Barang {{ $item->jenis }}</h5>
                        <p class="card-text">Tanggal Hilang {{ $item->tanggal_ketemu }}</p>
                        <p class="card-text">Spesifikasi : {{ $item->spek }}</p>
                        <p class="card-text"><small class="text-muted">{{ $item->kronologi }}</small></p>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
    
{{-- 
    @php
        $increment = 1;
    @endphp
    @foreach ($kehilangan as $item)
        <tr>
            <td>{{ $increment++ }}</td>
            <td><img src="{{ asset('/asset/img/'.$item->gambar) }}" style="width: 70px; height:70px"></td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->prodi }}</td>
            <td>{{ $item->angkatan }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jenis }}</td>
            <td>{{ $item->spek }}</td>
            <td>{{ $item->kronologi }}</td>
            <td>  
                <a href="{{ route('kehilangan.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i></a><br>
                <form action="{{ route('kehilangan.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm('Anda yakin ingin menghapus data tersebut ?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach --}}


    {{-- <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $increment = 1;
            @endphp
            @foreach ($users as $item)
                <tr>
                    <td>{{ $increment++ }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection

