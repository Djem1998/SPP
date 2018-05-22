<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class statusChangeController extends Controller
{
    public function show(Request $request)
    {
        DB::table('order')->where('device_id_device', $request->input('status'))->update(['status' => 'Done']);
        return redirect()->route('masterMenu');
    }
}
