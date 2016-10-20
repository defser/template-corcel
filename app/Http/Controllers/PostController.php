<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PostController extends Controller
{
    public function index(){
        //dd(Corcel\Post);
        $posts = Post::published()->get();
        return $posts;
        //$posts = App\Post::all(); // using the 'wordpress' connection
        //$posts = Corcel\Post::all(); // using the 'default' Laravel connection
    }
}
