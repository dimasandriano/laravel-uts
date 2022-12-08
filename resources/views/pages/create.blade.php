@extends('layout.layout')

@section('content')
    <div class="w-50 mx-auto">
        <form method="POST" action="{{route('buku.store')}}">
            @csrf
            <div class="mb-3 d-none">
                <label for="id" class="col-form-label">Id</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="mb-3">
                <label for="title" class="col-form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="author" class="col-form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="mb-3">
                <label for="Genre" class="col-form-label">Genre</label>
                <input type="text" class="form-control" id="Genre" name="genre">
            </div>
            <div class="mb-3">
                <label for="Tahun" class="col-form-label">Tahun</label>
                <input type="text" class="form-control" id="Tahun" name="tahun">
            </div>
            <div class="mb-3">
                <label for="gambar" class="col-form-label">Gambar</label>
                <input type="text" class="form-control" id="gambar" name="gambar">
            </div>
            <div class="mb-3">
                <label for="Deskripsi" class="col-form-label">Deskripsi</label>
                <textarea class="form-control" id="Deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Tambah Buku</button>
                <a href="/"> <button type="submit" class="btn btn-primary">Kembali</button></a>
            </div>
        </form>
    </div>
@endsection