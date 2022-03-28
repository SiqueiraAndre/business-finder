@extends('web.master.master')
@section('content')

    <section class="main_property">

        <div class="main_property_header py-5 bg-light ">
            <h1 class="text-center mb-5">Results for "{{$search}}"</h1>
            <div class="container">

                @if($businesses->count())
                    @php
                        $i=0;
                    @endphp
                    @foreach($businesses as $business)
                        @php
                            $i++;
                        @endphp
                        <a href="{{$business->slug}}"
                        <h4 class="text-front">#{{$i}}. {{$business->title}}</h4>
                        </a>
                        <p class="mb-4 pt-0" >
                            @foreach($business->categories as $category)
                            <span class="mr-4"> {{$category->title}}
                            </span>
                            @endforeach
                        </p>
                    @endforeach
                @else
                    <div class="col-12 p5 ">
                        <h2 class="text-front icon-info text-center">Oooops, não encontramos nada com esse parametro!</h2>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endsection
