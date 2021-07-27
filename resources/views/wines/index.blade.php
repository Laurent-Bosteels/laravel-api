@extends('layouts.layout')
@section('content')

<div class="wrapper wine-index">
  <h1>Wine Orders</h1>

        @foreach($wines as $wine)
          <div>
            {{ $wine -> name }} - {{ $wine -> type }} - {{ $wine -> country }} - {{ $wine -> price }}
          </div>
</div>

        
@endforeach
@endsection
