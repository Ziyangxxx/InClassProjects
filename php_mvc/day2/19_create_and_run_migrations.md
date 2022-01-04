## Create and run Migration Files

Migration files are scripts that define and create database tables, and also drop them when required.

## Create Migrations

Laravel convntions state that table names should be plural (eg: students).

**IMPORTANT: if you follow Laravel naming conventions, your App will work properly out of the box, without additional configuration or code.  If, however, you choose to follow your own naming conventions, you will likely need to add code to all your models to make them work properly.**

To create a migration for a table named `students`, run the following command:

```bash
php artisan make:migration create_students_table
```

Migration names should be descriptive, so that you can recognize the file names at a glance.  The previous command would create a migration file in `database/migrations`, with the two methods below.  The `up` method defines and creates the table, the down method `drops` the table.

```php
	public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }

```

Simply edit the migration to create the table you need.  We will look at how to run the migration soon.


## Running Migrations

After you have finished editing your database migration, it's time to run it so that Laravel can create the table for you in MySQL, SQLite, or whatever database you are using.

_Note: you must configure Laravel with your database name, username, and password, or this command will not work._

To run ALL the migrations in your `database/migrations` folder that have not already run, execute the following command:

```bash
php artisan migrate
```

You will see output on the screen showing that your migration has run successfully.  If there are errors, they will be displayed, and you can then correct your errors before running the migration again.

```bash
$ php artisan migrate
Migrating: 2020_10_25_193443_create_students_table
Migrated:  2020_10_25_193443_create_students_table (0.1 seconds)

```

## Resetting Migrations

You may very well run into a situation where you want to completely re-define your tables, adding or removing fields, etc.  In that case, you can simply reset all your migrations, then re-run them again, following the steps above.  To reset all your migrations (this will have the effect of deleting all your database tables), run the following command:

```bash
php artisan migrate:reset
```
