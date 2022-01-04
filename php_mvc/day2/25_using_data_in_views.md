# Using Data In Views

In the previous examples, we showed two simple routes, one for a list view, one for a detail view.  The list view, using the `students/index` view, passed down an array of multiple students.  The one for the detail view, using the `students/show` view, passed down an object containing a single student.

This is how we would use them in each view, outputting the data in an unordered list each time.

First, the list view:

```php
// index.blade.php

@extends('app')

@section('content')

	<h1>{{ $title }}</h1>

	<ul>
		@foreach($students as $student)
			<li>{{ $student->first }} {{ $student->last }} - {{ $student->email }}</li>
		@endforeach
	</ul>

@stop()

```

For the detail view:

```php
// show.blade.php

@extends('app')

@section('content')

	<h1>{{ $title }}</h1>

	<ul>
		<ul>First Name: {{ $student->first }}</ul>
		<ul>Last Name: {{ $student->last }}</ul>
		<ul>Email: {{ $student->email }}</li>
	</ul>

@stop()

```