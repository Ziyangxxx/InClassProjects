@extends('layouts/blog')

@section('header')
<header class="masthead" style="background-image: url('/images/d_beijing.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Woof!!</h1>
            <span class="subheading">{{ $post->name }}</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop()

@section('content')

<div class="row">
    <!-- Blog Post -->
    

      <div class="col">
        <div class="card h-100">
          <img class="card-img-top" src="/images/{{ $post->image }}" alt="{{ $post->name }}">
          <div class="card-body">
            <h4 class="card-title">{{ $post->name }}</h4>
            <p class="car-text"><strong>Other Names: </strong>{{ $post->other_names }}</p>
            <p class="car-text"><strong>Origin: </strong>{{ $post->origin }}</p>
            <p class="car-text"><strong>Category: </strong>{{ $cat->name }}</p>
            <p class="car-text"><strong>Male Weight: </strong>{{ $post->male_weight }}</p>
            <p class="car-text"><strong>Female Weight: </strong>{{ $post->female_weight }}</p>
            <p class="car-text"><strong>Life Span: </strong>{{ $post->life_span }}</p>
            <p class="car-text"><strong>Legitimacy: </strong>{{ $post->legitimacy }}</p>
            <p class="car-text"><strong>Description: </strong>{{ $post->description }}</p>
          </div>
        </div>
      </div>
    </div>

@stop()