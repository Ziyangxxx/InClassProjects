<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Dog extends Model
{
    protected $fillable = [
        'id',
        'name',
        'image',
        'other_names',
        'origin',
        'male_weight',
        'female_weight',
        'life_span',
        'category_id',
        'legitimacy',
        'description'
    ];

    /**
     * Function to connect 2 tables
     * 
     * @return Eloquent associates 2 tables
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
