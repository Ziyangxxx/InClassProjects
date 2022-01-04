# Creating and run Seeder Files

Seeder files can be used to populate your table with some sample data for testing, or to pre-populate important records like an admin account.

## Creating a Seeder

Create a seeder for the `students` table by running the following command, being sure to give the seeder a descriptive name:

```bash
php artisan make:seeder seed_students_table
```

A new seeder file will be created in `database/seeds`, with the following function stub ready for editing:

```php

 public function run()
    {
        //
    }
}
```

## Running Seeders

To run the seeders you have created, you must first run your migrations to make sure your database tables exist, or the following command will generate errors.

First, edit the DatabaseSeeder class file, and add the name of the seeder classes you want to run:

```php
	public function run()
    {
        $this->call(seed_students_table::class);
    }
```

Next, to run the seeders you have added to the `DatabaseSeeders` class, run the following command:

```bash
php artisan db:seed
```

## Refreshing Migrations (with seeds)

If you want to reset all your migrations, then run them all again, and seed all your data at the same time, you simply use the `refresh` command with the `--seed` flag:

```bash
php artisan migrate:refresh --seed
```
