@extends('layouts/blog')

@section('content')

<div class="col">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Favourite Moives</h1>
        <p class="lead">{{ $post->title }}</p>
    </header>

    <div class="row">

        <div class="col">
            <div class="card h-100">
                <img class="card-img-top" src="/images/{{ $post->image }}" alt="{{ $post->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="car-text"><strong>Director: </strong>{{ $post->director }}</p>
                    <p class="car-text"><strong>Running Time: </strong>{{ $post->running_time }} mins</p>
                    <p class="car-text"><strong>Studio: </strong>{{ $post->studio }}</p>
                </div>
            </div>
        </div>

    </div>

</div>
    
@stop()