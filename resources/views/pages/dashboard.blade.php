@extends('layout.layout')

@section('content')
<div class="d-flex flex-wrap gap-3 mx-3">
  @foreach ($datas as $data)
  <div class="card p-2" style="width: 18rem;">
    <img class=" h-75 w-100"  src="{{ $data['gambar'] }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $data['title'] }}</h5>
      <p class="card-text">{{ $data['tahun'] }}</p>
      <p class="card-text">{{ $data['author'] }}</p>
      <div class="d-flex justify-content-end">
        <a href="{{route('show', $data['id'])}}" class="btn btn-primary">Detail</a> 
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection