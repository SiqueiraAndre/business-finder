@extends('web.master.master')
@section('content')

    <div class="container">
        <div class="mx-auto text-center mt-5" style="width: 500px;">
            <form action="{{ route('search') }}" method="post">
                @csrf
                <h1>Business Finder</h1>
                <div class="p-5">
                    <div class="input-group">
                        <input type="search" name="q" class="form-control rounded"
                               required
                               placeholder="What are you looking for?"
                               aria-label="Search"
                               aria-describedby="search-addon"/>
                        <button type="submit" class="btn btn-outline-primary">search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
