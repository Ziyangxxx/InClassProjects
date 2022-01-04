<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){

        $posts = Post::latest()->get();
        $title = 'Lastes Posts';
        return view('blog/index', compact('posts', 'title'));
    }
}
