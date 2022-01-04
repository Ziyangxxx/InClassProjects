@extends('layouts/blog')

@section('header')
<header class="masthead" style="background-image: url('/images/about_beijing.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Woof!!</h1>
            <span class="subheading">Something About us</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@stop()

@section('content')

<div class="row">
    <!-- Blog Post -->

    <div class="col-lg-8 col-md-10 mx-auto">
        <h2 class="section-heading">Hello, my fellow dog lovers!</h2>
        <p>
            Our website aims to expand your knowledge of different kinds of dogs. 
            In the construction of this website, we will add more content to bring 
            you a more exciting experience.
        </p>
    </div>
     
</div>

@stop()