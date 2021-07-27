@extends('layouts.layout')

@section('content')
<div class="wrapper create-wine">

{{--     sending a post request to the wines route --}}    

        <form action="/wines" method="POST">
            @csrf {{-- blade directive, cross site request forgery--}}    
        <label for="name">Wine name:</label>
        <input type="text" id="name" name="name">
        <label for="country">Wine country:</label>
        <input type="text" id="country" name="country">
        <label for="type">Choose a wine type:</label>
        <select name="type" id="type">
        <option value="red">red</option>
        <option value="white">white</option>
        <option value="rose">rose</option>
        </select>
        <label for="price">Wine price:</label>
        <input type="text" id="price" name="price">
        <input type="submit" value="Create Wine">
    </form>

</div>
@endsection
