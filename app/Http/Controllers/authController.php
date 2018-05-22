<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class authController extends Controller
{
    public function show()
    {
        if (view()->exists('auth')) {
            return view('auth');
        }
    }
}
