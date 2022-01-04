# Eloquent Examples

Eloquent is Laravel's ORM (Object Relational Mapping) interface.  It allows us to interact with our database using easy to use methods.

A few Eloquent basics to get started.  

In the following examples, replace `Model` without whatever Model you are working with:

```php

// get all records ordered by primary key
App\Model::all()  

App\Model::find($id)  // get single record by its id

// When composing custom eloquent queries, if you're expecting
// a result set back, you need to add the ->get() method as
// the last method in query chain in order to return results.

// latest() is a method wrapped around: ORDER BY created_at DESC

// latest by default returns orderd by created_at desc
App\Model::latest()->get()


// order by updated_at desc
App\Model::latest('updated_at')->get() 

// Order By manually
App\Model::orderBy('created_at', 'DESC')->get()


// Long queries can be broken onto separate lines
App\Model::select('title','abstract', 'created_at')
    ->latest()
    ->get();


// Simple where clause
App\Model::where('title', '=', 'This is my title')->get();

// Simple and where (just chain where's together)
App\Model::where('title', '=', 'This is my title')
->where('id', '<=', 30)
->where('author_id', '=', 3)
->get();


// Or where
// user orWhere method
App\Model::where('author_id', '=', 3)
orWhere('author_id', '=', 22)
->get();


```


