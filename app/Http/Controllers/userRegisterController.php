<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class userRegisterController extends Controller
{
    public function show(Request $request)
    {
        $salt = 'sflprt49fhi2';
        $password = md5(md5($request->input('Password')) . $salt);
        DB::table('user')->insert(['first_name' => $request->input('name'), 'last_name' => $request->input('lastName'),
            'email' => $request->input('email'),
            'password' => $password, 'user_type' => $request->input('usertype'), 'login' => $request->input('login')]);
        $request->flashOnly(['name']);
        $this->authUser($request);
        $_SESSION['login'] = $request->input('name');
        if ($request->input('usertype') == 'Master'){
            return redirect()->route('addMasterType');
        }
        else{
            return redirect()->route('addClient');
        }
    }

    private function authUser(Request $request)
    {
        session_start();
        $_SESSION['Name'] = $request->input('email');
        setcookie("name", $request->input('email'), time() + 50000);
        $salt = 'sflprt49fhi2';
        $password = md5(md5($request->input('Password')) . $salt);
        setcookie("password", $password, time() + 50000);
        $email = $request->input('email');
        $id = DB::table('user')->where('email', $email)->value('id_user');
        $_SESSION['id'] = $id;
    }
}
