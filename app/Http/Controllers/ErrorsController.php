<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class ErrorsController extends Controller
{
    public function pagenotfound(){
      $typeDevice = $this->checkAgent();
      return View::make('errors.404')->with('typeDevice', $typeDevice);
    }

    public function internalerror(){
      $typeDevice = $this->checkAgent();
      return View::make('errors.500')->with('typeDevice', $typeDevice);
    }
}
