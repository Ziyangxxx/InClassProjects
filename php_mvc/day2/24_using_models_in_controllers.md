# Using Models in Controllers

Using our models in our controllers is as easy as it was to use them in Tinker.  Consider these two example, showing their routes, and the controller methods that handle them.

Route one: show a list view of students:

```php
Route::get('/students', 'StudentController@index');
```

The index method on the StudentController.  This method queries the database for all students, then passes that information down to the `student/index` view:

```php
function index()
{
	$title = "All Students";
	$students = App\Student::all();
	return view('students/index', compact('title', 'students'))
}
```


Route two: detail view of students:

```php
Route::get('/students/id', 'StudentController@show');
```

The show method on the StudentController.  This methods accepts the id from the request, then queries the database for that student (based on his id by default), then passes the data down to the `students/show` view:

```php
public function show($id)
{
	$title = "Student Detail";
	$student = App\Student::find($id);
	return view('students/show', compact('title', 'student'));
}

```

All the basic things you would like to do with your Model or table, are already pre-baked into Laravel: you do not have to write extra code, unless you have a very special circumstance, or need to define complex table relationships.

