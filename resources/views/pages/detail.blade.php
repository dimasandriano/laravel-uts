@extends('layout.layout')

@section('title')
    Dashboard
@endsection

@section('content')


<div class="card mb-3">
  <img src="{{$jsonfile['gambar']}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$jsonfile['title']}}</h5>
    <p class="card-text">{{$jsonfile['deskripsi']}}</p>
    <a href="/" class="btn btn-primary">Back</a>
  </div>
</div>


@endsection