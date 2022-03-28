@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md">
                        <div class="d-flex justify-content-end">
{{--                            <button class="btn pull-right btn-primary mb-4" >Add business</button>--}}

{{--                            <a href={{ route('admin.business.create') }} class="btn btn-orange icon-building-o ml-1">Add business</a>--}}
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">{{ __('Add Business') }}</div>

                    <div class="card-body">

                        <form class="app_form" action="{{ route('admin.business.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="fname">Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="fphone">Phone</label>
                                <input type="text" class="form-control" name="telephone" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="faddress">Address</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="fzipcode">Zipcode</label>
                                <input type="text" class="form-control" name="zipcode" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="fcity">City</label>
                                <input type="text" class="form-control" name="city" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="fstate">State</label>
                                <select class="form-control" name=state required>
                                    <option>Select State</option>
                                    @foreach($states as $state)
                                        <option value={{$state->id}}>{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-2">
                                <label for="fdescription">Description</label>
                                <textarea class="form-control"  name="description" required
                                          rows="5" cols="50">
                                </textarea>
                            </div>
                            <div class="form-group mt-2">
                                <label for="fcategory">Category</label>

                                    <select class="select form-control" multiple name=category required>
                                    <option>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value={{$category->id}}>{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="mt-3 btn btn-primary">Save</button>
                        </form>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
