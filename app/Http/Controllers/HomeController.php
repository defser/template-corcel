<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Distribuidores;
use View;

class HomeController extends Controller
{
    public function index(){
        $distribuidores = Post::type('distribuidor')->status('publish')->get();
        return View::make('home.index')->with('distribuidores', $distribuidores);
    }
}