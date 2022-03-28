@extends('web.master.master')
@section('content')
    <section class="main_property">

        <div class="main_property_header py-5 bg-light ">
            <h1 class="text-center mb-5">Business Finder</h1>
            <div class="container">

                <h2 class="text-front">{{ $business->title }}</h2>
                <p class="mb-0">
                @foreach($business->categories as $category)
                    <div>
                        {{$category->title}}
                    </div>
                    @endforeach
                    </p>
                    <h4 class="text-front pt-3 py-0">About</h4>
                    <p class="mb-0">{{ $business->description }}</p>
                    <p class="mb-0"><b>Address:</b> {{ $business->address }}, {{ $business->city }} - {{ $business->state }}, {{ $business->zipcode }}  </p>
                    <p class="mb-0"><b>Phone:</b> {{ $business->telephone }} </p>
            </div>
        </div>
@endsection
