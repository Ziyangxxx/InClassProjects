@extends('layouts/blog')

@section('content')

<div class="col">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Favourite Moives</h1>
      <p class="lead">{{ $title }}</p>
    </header>

    <div class="row">
    @foreach($posts as $post)
    <!-- Blog Post -->
    

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="/images/{{ $post->image }}" alt="{{ $post->title }}">
          <div class="card-body">
            <h4 class="card-title">{{ $post->title }}</h4>
            <p class="car-text"><strong>Director: </strong>{{ $post->director }}</p>
          </div>
          <div class="card-footer">
            <a href="/movies/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>

    @endforeach
    </div>

</div>
    
@stop()