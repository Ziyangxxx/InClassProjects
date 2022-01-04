@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard - Edit a Record') }}</div>

                <div class="card-body">
                   
                        <h2>Edit the Record</h2>

                        <p><a href="/admin/dogs" class="btn btn-warning">Back</a></p>


                        <form class="form" action="/admin/dogs/edit/{{ $post->id }}" method="post" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-group">

                                <input type="hidden" name="id" value="{{ old('id', $post->id) }}">

                                <label for="name">Record Name</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name', $post->name) }}" />
                                @error('name')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                                @error('id')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="other_names">Other Names</label>
                                <input class="form-control" type="text" name="other_names" value="{{ old('other_names', $post->other_names) }}" />
                                @error('other_names')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="origin">Origin</label>
                                <input class="form-control" type="text" name="origin" value="{{ old('origin', $post->origin) }}" />
                                @error('origin')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="male_weight">Male Weight</label>
                                <input class="form-control" type="text" name="male_weight" value="{{ old('male_weight', $post->male_weight) }}" />
                                @error('male_weight')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="female_weight">Female Weight</label>
                                <input class="form-control" type="text" name="female_weight" value="{{ old('female_weight', $post->female_weight) }}" />
                                @error('female_weight')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="life_span">Life Span</label>
                                <input class="form-control" type="number" name="life_span" value="{{ old('life_span', $post->life_span) }}" />
                                @error('life_span')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="category_id">Category ID</label>
                                <input class="form-control" type="number" name="category_id" value="{{ old('category_id', $post->category_id) }}" placeholder="pick from 1,2,3,4,5" />
                                @error('category_id')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="legitimacy">Legitimacy</label>
                                <input class="form-control" type="text" name="legitimacy" value="{{ old('legitimacy', $post->legitimacy) }}" placeholder="No limit/Areas limited" />
                                @error('legitimacy')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="description">Description</label>
                                <input class="form-control" type="text" name="description" value="{{ old('description', $post->description) }}" />
                                @error('description')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="form-group">

                                @if($post->image)
                                <div>
                                    <img class="img-thumbnail" src="/images/{{ old('image', $post->image) }}">
                                </div>
                                @endif
                                <label for="image">Image</label>
                                <input type="file"  name="image" value="{{ $post->image }}" />
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