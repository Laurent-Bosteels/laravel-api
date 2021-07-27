@extends('layouts.layout')


@section('content')
<div class="flex-center position-ref full-height">
            
            <div class="content">
                    <p class="message">{{session('message')}}</p>
                    <a href="{{ route('wines.create') }}">Order a wine</a>
            </div>
        </div>
@endsection

