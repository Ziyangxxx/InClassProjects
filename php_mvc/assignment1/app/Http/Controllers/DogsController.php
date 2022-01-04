<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use App\Category;

class DogsController extends Controller
{
    /**
     * Function to access home page
     */
    public function home(){
        return view('welcome');
    }

    /**
     * Function to access list view page
     */
    public function list(){
        $posts = Dog::orderBy('name', 'ASC')
        ->with('category')
        ->get();
        $cats = Category::orderBy('name','ASC')
        ->with('dogs')
        ->get();
        $title = 'Our Dogs';
        return view('/blog/index', compact('posts', 'title', 'cats'));
    }

    /**
     * Function to access detail page
     */
    public function show($id){
        $post = Dog::find($id);
        $title = $post->title;
        $cat = Category::find($post->category_id);
        return view('/blog/show', compact('post', 'title', 'cat'));
    }
}
