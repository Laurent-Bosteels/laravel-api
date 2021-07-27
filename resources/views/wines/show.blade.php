@extends('layouts.layout')

@section('content')

<div class="flex-center position-ref full-height">
    <div class="content">

            <div class="wrapper wine-details">
                <p class="name">Name: {{ $wine->name }}</p>
                <p class="country">Country: {{ $wine->country }}</p>
                <p class="type">Type: {{ $wine->type }}</p>
                <p class="optional">Optional:</p>
                <ul>
                    @foreach($wine->optional as $option)
                    <li>{{ $option }}</li>
                    @endforeach
                </ul>
                <form action="/wines/{{$wine->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete Order</button>
                </form>
            </div>
            <a href="/wines" class="back"><- Back to all wines</a>

    </div>
</div>

@endsection
