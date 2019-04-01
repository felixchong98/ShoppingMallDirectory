<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function navigation()
    {
        return view('navigation');
    }

    public function footer()
    {
      return view('footer');
    }

    public function welcome()
    {
      return view('welcome');
    }

    public function about()
    {
      return view('about');
    }

    public function contact()
    {
      return view('contact');
    }
}
