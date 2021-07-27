        @extends('layouts.layout')

        @section('content')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Winelist
                </div>

                <!-- @for($i = 0; $i < 5; $i++)
                  <p>the value of i is {{ $i }}</p>
                @endfor -->

                <!-- @for($i = 0; $i < count($wines); $i++)
                  <p>{{ $wines[$i]['type'] }}</p>
                @endfor -->

                @foreach($wines as $wine)
                  <div>
                    {{ $wine -> name }} - {{ $wine -> type }} - {{ $wine -> country }} - {{ $wine -> price }}
                  </div>
                @endforeach
            </div>

        </div>
        @endsection
