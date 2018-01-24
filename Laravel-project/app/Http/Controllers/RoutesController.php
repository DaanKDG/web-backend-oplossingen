<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{

  public function home() {

      return view('welcome');


  }

  public function about() {

      return 'This is the about page';


  }
}
