@extends('layout.layout')

@section('title')
    Dashboard
@endsection

@section('content')


<!-- <div class="card mb-3">
  <img src="{{$jsonfile['gambar']}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$jsonfile['title']}}</h5>
    <p class="card-text">{{$jsonfile['deskripsi']}}</p>
    <a href="/" class="btn btn-primary">Back</a>
  </div>
</div> -->

<div class="container">
  <div class="row">
    <div class="col d-flex justify-content-center">
      <img src="{{$jsonfile['gambar']}}" class="card-img-top w-75" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title-justify">{{$jsonfile['title']}}</h5><br>
    <div class="card-text-justify">
    <b>Penulis : {{$jsonfile['author']}}</b><br>
    <b>Genre : {{$jsonfile['genre']}}</b><br>
    <b>Tahun : {{$jsonfile['tahun']}}</b><br><br>
    <hr/>
    <p><p>{{$jsonfile['deskripsi']}}</p></p><br>
    </div>
    <div class="d-flex justify-content-end">
      <a href="/" class="btn btn-primary">Back</a>
    </div>
    </div>
  </div>
</div>


@endsection