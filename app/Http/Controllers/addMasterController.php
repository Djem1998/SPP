<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class addMasterController extends Controller
{
    public function show(Request $request){
        session_start();
        $id = $_SESSION['id'];
        DB::table('master')->insert(['user_id_user' => $id, 'work_type' => $request->input('masterType')]);
        return redirect()->route('masterMenu');
    }
}
