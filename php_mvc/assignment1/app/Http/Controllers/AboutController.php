<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Function to access about page
     */
    public function about(){
        return view('/blog/about');
    }
}
