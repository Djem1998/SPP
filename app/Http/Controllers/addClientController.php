<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class addClientController extends Controller
{
    public function show(){
        session_start();
        $id = $_SESSION['id'];
        DB::table('client')->insert(['user_id_user' => $id]);
        return redirect()->route('clientOrder');
    }
}
