<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dog;

class Category extends Model
{
    protected $fillable=['name'];
    
    /**
     * Function to connect 2 tables
     * 
     * @return Eloquent associates 2 tables
     */
    public function dogs(){
        return $this->hasMany(Dog::class);
    }
}
