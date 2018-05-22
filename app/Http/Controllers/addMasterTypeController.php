<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class addMasterTypeController extends Controller
{
    public function show(){
        return view('addMasterType');
    }
}
