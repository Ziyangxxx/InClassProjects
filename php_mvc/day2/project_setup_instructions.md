# Setting up a project

1. Install your laravel project using composer

```bash
composer create-project laravel/laravel blog ^7
```

2. Edit `.env`

* Change the app name
* Set database connection to sqlite
* Comment out other database attributes

3. Touch empty database file in database folder

```bash
touch database/datatbase.sqlite
```

4. Run default migrations to make sure everything works

```bash
php artisan migrate
```

If there are errors, figure what they are and correct them.

5. Run laravel server and make sure you can see your site

```bash
php artisan serve
```

Visit `http://localhhost:8000` to see your site

Alternatively, create a vhost and edit your hosts file if you wish to use a vhost.

6. Create migrations for project table

```bash
php artisan make:migration create_movies_table
```

Edit migration to add all your fields.

7. Make a model for your table

Use best practices for naming your model

8. Create a seeder and populate your table

```bash
php artisan make:seeder seed_movies_table
```

See blog seeder for syntax on editing the seeder itself.


9. Create a controller for your table (MoviesController)

10. Edit `web.php` to add your routes for home, list view, and detail view

Routes should be :  '/', '/movies', '/movies/{id}'

For home page route, just use a closure.

For Movies routes, use the Controller

11. Create views for home, list, and detail

Follow best practices for naming these.  Use a layout if you want, and your views can extend it.

12. Create methods in your Controller to handle the routes

* index (list view):  index()
* show (detail): 	show($id)

13.  Test to make sure everything works

14. Submit and get marks
