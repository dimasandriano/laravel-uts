@extends('layout.layout')

@section('title')
    Perpustakaan
@endsection

@section('content')
<a href="/buku/create" class="btn btn-primary">Tambah Buku</a>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Genre</th>
        <th scope="col">Tahun</th>
        <th scope="col">Gambar</th>
        <th scope="col">Deskripsi</th>
        <th width="60px">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <th scope="row">{{ $data['id'] }}</th>
                <td>{{ $data['title'] }}</td>
                <td>{{ $data['author'] }}</td>
                <td>{{ $data['genre'] }}</td>
                <td>{{ $data['tahun'] }}</td>
                <td>{{ $data['gambar'] }}</td>
                <td>{{ $data['deskripsi'] }}</td>
                
                <td><a href="{{ route('buku.edit', $data['id']) }}" class="btn btn-warning" >Edit</a></td>
                <td><a href="{{ route('buku.destroy', $data['id']) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection