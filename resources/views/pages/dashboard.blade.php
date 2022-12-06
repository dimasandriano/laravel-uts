@extends('layout.layout')

@section('content')
@foreach ($datas as $data)

<div class="card" style="width: 18rem;">
  <img src="{{ $data['gambar'] }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $data['title'] }}</h5>
    <p class="card-text">{{ $data['deskripsi'] }}</p>
    <a href="{{route('show', $data['id'])}}" class="btn btn-primary">Detail</a>
  </div>
</div>
@endforeach
@endsection