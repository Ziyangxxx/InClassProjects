# Tinker

Tinker is the name of a Laravel utility that allows you to test your code in a temporary shell, including accessing all Laravel's classes, your models, etc.  Tinker is a great way to test and play with your code prior to building methods or classes.

## To start tinker

To start tinker, run the following artisan command:

```bash
php artisan tinker
```

A tinkier Psy shell will open up as follows:

```bash

$ php artisan tinker
Psy Shell v0.10.4 (PHP 7.4.10 — cli) by Justin Hileman
>>>

```

You can write code in the Psy shell, as if you are writing it in your application.

For example, to test our User class, we would need to take the following steps in a file:

```php
use App\Student;

$students = Student::all(); // get all students

$one = Student::find(33);  // find the student with id of 33

```

We can do exactly the same think in tinker:

```php
$ php artisan tinker
Psy Shell v0.10.4 (PHP 7.4.10 — cli) by Justin Hileman
>>> use App\Student;
>>> $students = Student::all();
=> Illuminate\Database\Eloquent\Collection {#4001
     all: [],
   }
>>> $one = Student::find(33);
=> null
>>>

```

Of course, since I do not have any data in my Student table at this time, I have no results to show.  But we can also use Tinker to add records:

```bash

>>> $student = new Student()
=> App\Student {#3208}
>>> $student->first = 'Dave'
=> "Dave"
>>> $student->last = 'Jones'
=> "Jones"
>>> $student->email = 'dave@hotmail.com';
=> "dave@hotmail.com"
>>> $student->save()
=> true
>>> $student = new Student()
=> App\Student {#3999}
>>> $student->first = 'Mirabelle'
=> "Mirabelle"
>>> $sudent->last = 'Connor'
=> "Connor"
>>> $student->email = 'mirabelle@example.com'
=> "mirabelle@example.com"
>>> $student->save()
=> true

```

Now we can query our students table, use our model, and inspect our data:

```bash
>>> Student::all()
=> Illuminate\Database\Eloquent\Collection {#4143
     all: [
       App\Student {#4144
         id: 1,
         first: "Dave",
         last: "Jones",
         email: "dave@hotmail.com",
         created_at: "2020-10-25 20:14:29",
         updated_at: "2020-10-25 20:14:29",
       },
       App\Student {#4145
         id: 2,
         first: "Mirabelle",
         last: "Connor",
         email: "mirabelle@example.com",
         created_at: "2020-10-25 20:15:43",
         updated_at: "2020-10-25 20:15:43",
       },
     ],
   }
>>> Student::find(2)
=> App\Student {#4001
     id: 2,
     first: "Mirabelle",
     last: "Connor",
     email: "mirabelle@example.com",
     created_at: "2020-10-25 20:15:43",
     updated_at: "2020-10-25 20:15:43",
   }
>>>

```





