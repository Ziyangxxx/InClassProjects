# Views extend Layouts

If a layout can be considered a `parent`, similar to a parent Class, then a view can be considered as a chile, or a Class that extends a parent.

## Extending a layout

This is a typical view.  It extends the layout above, and provides a content section that can replace the `yield('content')` in the layout:

```php

	@extends('layouts/app')

	@section('content')

		<div class="row">

			<div class="col-12">

			<h1>{{ title }}></h1>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

		</div><!-- /.row -->

	@stop()

```


In the layout file in the previous example, we defined a section using the `yield` declaration that every view can provide: `content`.  When the view defines that section, it will automatically be injected into the parent layout.  Note: the section ends with the `stop()` declaration.

The final, generate HTML for our `about` view, will end up looking like this in the browser:

```php

	<!DOCTYPE html>
	<html>
	<head>
		<title>My App</title>
		<link rel="stylesheet" href="/css/app/css" />
		<script src="/js/app.js"></script>
		<title>About Us | My App</title>
	</head>
	<body>

		<div class="container">

		<!-- Start view content -->

			<div class="row">

				<div class="col-12">

				<h1>About Us</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>

			</div><!-- /row -->

		<!-- End view content -->

		</div><!-- /.container -->

	</body>
	</html>

```

## Calling views from the route handler 

However you are handling your routes, via closure or Controller method, you will need to invoke the correct view.    

Just as in Object Oriented Programming, you don't instantiate the parent Class... instead, you instantiate the child class that extends the parent.  The same is true with views.

We will never invoke the `layout` blade directly.  Instead, we will always invoke the view files that extend it:


```php

	public function about()
	{
		$title = 'About Us';
		return view('about', compact('title'));
	}

```

In the example above, the `about` blade identified by the controller method will be displayed... within the layout it extends.





