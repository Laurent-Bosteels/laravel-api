@extends('layouts.app')
@section('content')

<div class="wrapper wine-index">
  <h1>Wine Orders</h1>

  @foreach($wines as $wine)
  <div class="wine-item">
    <img src="/img/wine.png" alt="wineicon">
    <h4><a href="/wines/{{ $wine->id }}">{{ $wine->name }}</a></h4>
  </div>
@endforeach

@endsection
