<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class registerController extends Controller
{
    public function show()
    {
        if (view()->exists('register')) {
            return view('register');
        }
    }
}
