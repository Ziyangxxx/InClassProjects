@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard - Dogs') }}</div>

                <div class="card-body">

                    <p>
                        <a class="btn btn-success" href="/admin/dogs/create">Create a Record</a>
                    </p>

                    <table class="table table-striped">

                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Origin</th>
                            <th>Edit/Delete</th>
                        </tr>

                        @foreach($posts as $post)
                        
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->origin }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/admin/dogs/edit/{{ $post->id }}">Edit</a>&nbsp;
                                <form action="/admin/dogs/delete/{{ $post->id }}" method="post" class="form-inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                    <button class="btn btn-danger btn-sm">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        
                        @endforeach
                        

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection