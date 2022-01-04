@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard - Create Record') }}</div>

                <div class="card-body">
                   
                        <h2>Create New Record</h2>

                        <p><a href="/admin/dogs" class="btn btn-warning">Back</a></p>


                        <form class="form" action="/admin/dogs" method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            <div class="form-group">

                                <label for="name">Record Name</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                                @error('name')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="other_names">Other Names</label>
                                <input class="form-control" type="text" name="other_names" value="{{ old('other_names') }}" />
                                @error('other_names')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="origin">Origin</label>
                                <input class="form-control" type="text" name="origin" value="{{ old('origin') }}" />
                                @error('origin')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="male_weight">Male Weight</label>
                                <input class="form-control" type="text" name="male_weight" value="{{ old('male_weight') }}" />
                                @error('male_weight')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="female_weight">Female Weight</label>
                                <input class="form-control" type="text" name="female_weight" value="{{ old('female_weight') }}" />
                                @error('female_weight')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="life_span">Life Span</label>
                                <input class="form-control" type="number" name="life_span" value="{{ old('life_span') }}" />
                                @error('life_span')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="category_id">Category ID</label>
                                <input class="form-control" type="number" name="category_id" value="{{ old('category_id') }}" placeholder="pick from 1,2,3,4,5" />
                                @error('category_id')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="legitimacy">Legitimacy</label>
                                <input class="form-control" type="text" name="legitimacy" value="{{ old('legitimacy') }}" placeholder="No limit/Areas limited" />
                                @error('legitimacy')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="description">Description</label>
                                <input class="form-control" type="text" name="description" value="{{ old('description') }}" />
                                @error('description')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="image">Image</label>
                                <input type="file"  name="image" />
                                @error('image')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection