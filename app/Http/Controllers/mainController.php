<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function show()
    {
        if (view()->exists('main')) {
            return view('main');
        }
    }
}