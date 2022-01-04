# Yielding Unique Content

Although the about page in the previous example provides a simple layout, with only a single column, perhaps other pages provide different layouts to be yielded into the content section.

## Providing a custom layout for a view

Take the following example, for the `faq.blade.php` view.  It provides a layout with two columns, one with the id of `main` the other with the id of `sidebar`.

```php

	@extends('app')


	@section('content')

		<div class="row">

			<div class="col-9" id="main">

				<h1>{{ title }}</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

			<div class="col-3" id="sidebar">

			    <h3>Pick a FAQ</h3>

			    <ul>
			    	<li><a href="#">FAQ 1</a></li>
			    	<li><a href="#">FAQ 2</a></li>
			    	<li><a href="#">FAQ 3</a></li>
			    	<li><a href="#">FAQ 4</a></li>
			    	<li><a href="#">FAQ 5</a></li>
			    </ul

			</div>

		</div><!-- /.row -->

	@stop()

```


The layout does not care what content is provided.  Whatever is provided will be output into the yielded section:


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

			<div class="col-9" id="main">

				<h1>{{ title }}</h1>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			</div>

			<div class="col-3" id="sidebar">

			    <h3>Pick a FAQ</h3>

			    <ul>
			    	<li><a href="#">FAQ 1</a></li>
			    	<li><a href="#">FAQ 2</a></li>
			    	<li><a href="#">FAQ 3</a></li>
			    	<li><a href="#">FAQ 4</a></li>
			    	<li><a href="#">FAQ 5</a></li>
			    </ul

			</div>

		</div>
			

		<!-- End view content -->

		</div><!-- /.container -->

	</body>
	</html>

```