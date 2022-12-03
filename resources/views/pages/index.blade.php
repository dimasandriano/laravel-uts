@extends('layout.layout')

@section('title')
    Perpustakaan
@endsection

@section('content')
<a href="/create">
  <button class="btn btn-primary">Tambah Buku</button>
</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Author</th>
        <th scope="col">Title</th>
        <th scope="col">Deskripsi</th>
        <th width="60px">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <th scope="row">{{ $data['id'] }}</th>
                <td>{{ $data['author'] }}</td>
                <td>{{ $data['title'] }}</td>
                <td>{{ $data['deskripsi'] }}</td>
                <td><button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal" data-bs-whatever="Edit">Edit</button></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection