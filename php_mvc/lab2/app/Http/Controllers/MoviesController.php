<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    /**
     * Function to access home page
     */
    public function home(){
        return view('home');
    }

    /**
     * Function to access list view page
     */
    public function list(){
        $posts = Movie::latest() -> get();
        $title = 'Movie Posts';
        return view('/blog/index', compact('posts', 'title'));
    }

    /**
     * Function to access detail view page
     */
    public function detail($id){
        $post = Movie::find($id);
        return view('/blog/show', compact('post'));
    }
}
