@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">

            <div class="wrapper wine-details">
                <p class="type">Type: {{ $wine->name }}</p>
                <p class="type">Country: {{ $wine->country }}</p>
                <p class="type">Name: {{ $wine->name }}</p>
            </div>
            <a href="/wines" class="back"><- Back to all wines</a>

    </div>
</div>

@endsection
