@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md">
                        <div class="d-flex justify-content-end">
                            <button class="btn pull-right btn-primary mb-4" >Add business</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Businesses') }}</div>

                    <div class="card-body">

                        @if($businesses->count())
                            @php
                                $i=0;
                            @endphp
                            @foreach($businesses as $business)
                                @php
                                    $i++;
                                @endphp
                                <a href="/admin/{{$business->slug}}"
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
                                <h2 class="text-front icon-info text-center">Nenhum registro encontrado!</h2>
                            </div>
                        @endif

{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                        {{ __('You are logged in!') }}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
