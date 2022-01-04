@extends('layouts/blog')

@section('content')



 <div class="col-md-8">


        <h1 class="my-4">Page Heading
          <small>{{ $title }}</small>
        </h1>

        @foreach($posts as $post)

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="/images/{{ $post->featured_image }}" alt="{{ $post->title }}">
          <div class="card-body">
            <h2 class="card-title">{{ $post->title }}</h2>
            <p class="card-text"> {{ $post->summary }}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{ $post->created_at }} by
            <a href="#">WDD Blog Manager</a>
          </div>
        </div>

        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>


@stop()

@section('sidebar')

@include('partials/sidebar')

@stop()