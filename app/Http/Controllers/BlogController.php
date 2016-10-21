<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use View;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::type('post')->status('publish')->orderBy('id', 'DESC')->simplePaginate(1);
        return View::make('blog.index')->with('posts', $posts);
    }

    public function post($slug){
        $post = Post::type('post')->status('publish')->where('post_name', '=', $slug)->first();
        
        return View::make('blog.post')->with('post', $post);
    }
}
