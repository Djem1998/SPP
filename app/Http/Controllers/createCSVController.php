<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Order;
use Laracsv;

class createCSVController extends Controller
{
    public function show()
    {
        session_start();
        $id = $_SESSION['id'];
        $name = $_SESSION['login'];
        $id_master = DB::table('master')->where('user_id_user', $id)->value('id_master');
        $id_order = DB::table('order')->where('master_id_master', $id_master)->value('id_order');
        $price = DB::table('order')->where('master_id_master', $id_master)->value('price');
        $date = DB::table('order')->where('master_id_master', $id_master)->value('date');
        $status = DB::table('order')->where('master_id_master', $id_master)->value('status');
        $id_client = DB::table('order')->where('master_id_master', $id_master)->value('client_id_client');
        $id_device = DB::table('order')->where('master_id_master', $id_master)->value('device_id_device');

        $order = Order:: get(); // Все пользователи
        $csvExporter = new  \ Laracsv \ Export ();
        $csvExporter->build($order, ['id_order', 'price', 'date', 'status', 'master_id_master', 'client_id_client', 'device_id_device'])->download('reportCSV.csv');
    }
}
