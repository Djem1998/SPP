<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class UserTypeController extends Controller
{
    public function show(Request $request){
        session_start();
        $id = $_SESSION['id'];
        $usertype = DB::table('user')->where('id_user',$id)->value('user_type');
        if ($usertype=='Master'){
            return redirect()->route('masterMenu');
        }
        else{
            return redirect()->route('clientOrder');
        }
    }
}
