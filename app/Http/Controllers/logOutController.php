<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class logOutController extends Controller
{
    public function show(Request $request)
    {
        session_start();
        unset($_SESSION['id']); //удаляем переменную сессии
        SetCookie("name", ""); //удаляем cookie с логином
        SetCookie("password", "");
        return redirect()->route('main');
    }
}
