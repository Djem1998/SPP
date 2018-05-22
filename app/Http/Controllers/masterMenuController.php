<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class masterMenuController extends Controller
{
    public function show()
    {
        session_start();
        $id_user=DB::table('master')->where('user_id_user', $_SESSION['id'])->value('id_master');

        $id_device = DB::table('order')->where('master_id_master', $id_user)->value('device_id_device');
        $id_device1 = DB::table('order')->where('master_id_master', $id_user)->take(1)->skip(1)->value('device_id_device');
        $id_device2 = DB::table('order')->where('master_id_master', $id_user)->take(2)->skip(2)->value('device_id_device');
        $id_device3 = DB::table('order')->where('master_id_master', $id_user)->take(3)->skip(3)->value('device_id_device');
        $id_device4 = DB::table('order')->where('master_id_master', $id_user)->take(4)->skip(4)->value('device_id_device');

        $price = DB::table('order')->where('master_id_master', $id_user)->value('price');
        $status = DB::table('order')->where('master_id_master', $id_user)->value('status');
        $model = DB::table('device')->where('id_device', $id_device)->value('model');
        $model_type = DB::table('device')->where('id_device', $id_device)->value('device_type');

        $price1 = DB::table('order')->where('master_id_master', $id_user)->take(1)->skip(1)->value('price');
        $status1 = DB::table('order')->where('master_id_master', $id_user)->take(1)->skip(1)->value('status');
        $model1 = DB::table('device')->where('id_device', $id_device1)->take(1)->skip(1)->value('model');
        $model_type1 = DB::table('device')->where('id_device', $id_device1)->take(1)->skip(1)->value('device_type');

        $price2 = DB::table('order')->where('master_id_master', $id_user)->take(2)->skip(2)->value('price');
        $status2 = DB::table('order')->where('master_id_master', $id_user)->take(2)->skip(2)->value('status');
        $model2 = DB::table('device')->where('id_device', $id_device2)->take(2)->skip(2)->value('model');
        $model_type2 = DB::table('device')->where('id_device', $id_device2)->take(2)->skip(2)->value('device_type');

        $price3 = DB::table('order')->where('master_id_master', $id_user)->take(3)->skip(3)->value('price');
        $status3 = DB::table('order')->where('master_id_master', $id_user)->take(3)->skip(3)->value('status');
        $model3 = DB::table('device')->where('id_device', $id_device3)->take(3)->skip(3)->value('model');
        $model_type3 = DB::table('device')->where('id_device', $id_device3)->take(3)->skip(3)->value('device_type');

        $price4 = DB::table('order')->where('master_id_master', $id_user)->take(4)->skip(4)->value('price');
        $status4 = DB::table('order')->where('master_id_master', $id_user)->take(4)->skip(4)->value('status');
        $model4 = DB::table('device')->where('id_device', $id_device4)->take(4)->skip(4)->value('model');
        $model_type4 = DB::table('device')->where('id_device', $id_device4)->take(4)->skip(4)->value('device_type');

        return view('masterMenu')->with([
            'price' => $price,
            'status' => $status,
            'model' => $model,
            'model_type' => $model_type,
            'price1' => $price1,
            'status1' => $status1,
            'model1' => $model1,
            'model_type1' => $model_type1,
            'price2' => $price2,
            'status2' => $status2,
            'model2' => $model2,
            'model_type2' => $model_type2,
            'price3' => $price3,
            'status3' => $status3,
            'model3' => $model3,
            'model_type3' => $model_type3,
            'price4' => $price4,
            'status4' => $status4,
            'model4' => $model4,
            'model_type4' => $model_type4,
            'id_device'=>$id_device,
            'id_device1'=>$id_device1,
            'id_device2'=>$id_device2,
            'id_device3'=>$id_device3,
            'id_device4'=>$id_device4
        ]);
    }
}
