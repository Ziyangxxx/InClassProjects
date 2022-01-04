# Dynamic Layouts

We can make our views more dynamic by adding additional `yield` blocks to the layout.  If a view provides the required section, it will be output.  If not, it will not.  The following layout will accept a sidebar if it is provided in the view.

```php

	<!DOCTYPE html>
	<html>
	<head>
		<title>My App</title>
		<link rel="stylesheet" href="/css/app/css" />
		<script src="/js/app.js"></script>
		<title>{{ title }} | My App</title>
	</head>
	<body>

		<header>
			@include('partials/nav')
			@include('partials/flash')
		</header>

		<div class="container">

			<div class="row">

			<!-- Start view content -->

				@yield('content')

				@yield('sidebar')

			<!-- End view content -->

			</div><!-- /.row -->

		</div><!-- /.container -->

		<footer>
			@include('partials/nav')
		</footer>


	</body>
	</html>

```

## The views

Either of the following views will work with our new app layout, providing an easy, dynamic way to provide different layouts when required:

**Layout 1, with a sidebar:**

```php

@extends('app')


@section('content')

<div class="col-9">
	<h1>{{ title }}</h1>

	<p>This is the main content</p>
</div>

@stop() 

@section('sidebar')

<div class="col-3">

	<h2>Sidebar</h2>

	<p>Sidebar content goes here</h2>

</div>

@stop()

```

**Layout2, No sidebar:**

```php

@extends('app')


@section('content')

<div class="col-12">
	<h1>{{ title }}</h1>

	<p>This is the main content</p>
</div>

@stop() 


```


