@extends('layouts.main')
@section('title','Pengguna')


@section('content')
    <h1 class="h3 mb-4 text-gray-800">Akun Pengguna</h1><br>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Admin</th>
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
                    <td>{{ $item->is_admin }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

