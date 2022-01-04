@extends('layouts/blog')

@section('header')
<header class="masthead" style="background-image: url('/images/beijing.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Woof!!</h1>
            <span class="subheading">We Present to You Our Most Popular Dogs</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop()

@section('content')

<div class="row">
    @foreach($posts as $post)
    <!-- Blog Post -->
    

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="/images/{{ $post->image }}" alt="{{ $post->name }}">
          <div class="card-body">
            <h4 class="card-title">{{ $post->name }}</h4>
            <p class="car-text"><strong>Origin: </strong>{{ $post->origin }}</p>
            <p class="car-text"><strong>Category: </strong>{{ $post->category->name }}</p>
          </div>
          <div class="card-footer">
            <a href="/dogs/{{ $post->id }}" class="btn btn-primary">Read More &rarr;</a>
          </div>
        </div>
      </div>

    @endforeach
    </div>

@stop()