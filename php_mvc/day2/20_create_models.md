# Creating Models

Any table you create will likely require a model file to go along with it.  

Laravel convention states that model names must be singular (eg: Student).  The reason being that the Model generally represents a single instance of the entity.

**IMPORTANT: if you follow Laravel naming conventions, your App will work properly out of the box, without additional configuration or code.  If, however, you choose to follow your own naming conventions, you will likely need to add code to all your models to make them work properly.**

Create a model for the students table by running the following command:

```bash
php artisan make:model Student
```

The new model file will be created in the `app` folder, in the `App` namespace, ready to use.

_Note: in Laravel 8, the new model file will be created in  the `app/Models`, folder, in the `App\Models` namespace._


