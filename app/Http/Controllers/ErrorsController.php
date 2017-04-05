<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class ErrorsController extends Controller
{
    public function pagenotfound(){
        return View::make('errors.404');
    }

    public function internalerror(){
        return View::make('errors.500');
    }
}
