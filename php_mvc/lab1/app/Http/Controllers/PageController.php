<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Function to access contact page
     */
    public function contact(){
        return view('contact');
    }

    /**
     * Function to access gallery page
     */
    public function gallery(){
        return view('gallery');
    }

    /**
     * Function to access index page
     */
    public function index(){
        return view('index');
    }

    /**
     * Function to access intro page
     */
    public function intro(){
        return view('intro');
    }

    /**
     * Function to access port page
     */
    public function port(){
        return view('port');
    }
}
