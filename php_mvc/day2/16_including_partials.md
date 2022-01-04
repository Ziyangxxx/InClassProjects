# Include Partials

We can dry up our layouts and views even more, by using partials to replace hard-coded content.  This allows us to reuse even view files, for different pages or purposes.

Think of partials, or includes, as being similar to a `trait` you might use in a class, or more than one class.  Traits allow you to create unique pieces of functionality that can be imported into any class that requires that functionality.

Includes offer the same trait functionality for views.  They also allow us to organize our code into smaller, unique components, storing them in separate files, an approach that we may end up using if we develop Vue or React applications later on.

## Our first include

We have been using the `app` layout, but we can make it even more versatile by using `include` statements.  In this example, the layout now includes a navigation partial used in the header and the footer, as well a partial to output flash messages if there are any... we'll see how to actually implement those later!  As you can see in the include statements below, we are including our partials from a sub-folder of the views folder named `partials`.

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

		<!-- Start view content -->

			@yield('content')

		<!-- End view content -->

		</div><!-- /.container -->

		<footer>
			@include('partials/nav')
		</footer>

@stop()

```

## The partials

**The nav partial**:

```php

// nav.blade.php

<nav>

	<ul>
		<li><a href="/">Home</a></li>
		<li><a href="/about">About</a></li>
		<li><a href="shop">Shop</a></li>
		<li><a href="/faq">FAQ</a></li>
		<li><a href="/contact">Contact</a></li>
		
	</ul>

</nav>

```

**The flash partial**:

```php

@if(Session::flash())

	@if(session('error'))

		<div class="flash error">
			{{ session('error') }}
		</div>

	@endif

	@if(session('success'))

		<div class="flash success">
			{{ session('success') }}
		</div>

	@endif

@endif

```

