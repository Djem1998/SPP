<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;

class addOrderController extends Controller
{
    public function show(Request $request)
    {
        session_start();
        $id = DB::table('device')->where('model', $request->input('exampleInputModel'))->value('id_device');
        if ($id != null) {
            $count = DB::table('device')->where('model', $request->input('exampleInputModel'))->value('repaire_count');
            $count = $count + 1;
            DB::table('device')->where('model', $request->input('exampleInputModel'))->update(['repaire_count' => $count, 'last_repair_date' => $request->input('exampleInputDate')]);
        } else {
            $id_breakages = 1;
            if ($request->input('exampleInputBreakage') == '1') {
                $id_breakages = 1;
            }
            if ($request->input('exampleInputBreakage') == '2') {
                $id_breakages = 2;
            }
            if ($request->input('exampleInputBreakage') == '3') {
                $id_breakages = 3;
            }
            if ($request->input('exampleInputBreakage') == '4') {
                $id_breakages = 4;
            }
            if ($request->input('exampleInputBreakage') == '5') {
                $id_breakages = 5;
            }
            $model = '';
            if ($request->input('exampleInputMobile')=='1'){
                $model = 'Mobile';
            }
            if ($request->input('exampleInputMobile')=='2'){
                $model = 'Tablet';
            }
            if ($request->input('exampleInputMobile')=='3'){
                $model = 'Computer';
            }
            DB::table('device')->insert(['device_type' => $model, 'model' => $request->input('exampleInputModel'),
                'last_repair_date' => $request->input('exampleInputDate'),
                'repaire_count' => 1, 'breakages_id_breakages' => $id_breakages]);
        }
        $master_type = '';
        if ($request->input('exampleInputBreakage') == '1') {
            $master_type = 'Repair top glass';
        }
        if ($request->input('exampleInputBreakage') == '2') {
            $master_type = 'Repair sensor glass';
        }
        if ($request->input('exampleInputBreakage') == '3') {
            $master_type = 'Repair load speaker';
        }
        if ($request->input('exampleInputBreakage') == '4') {
            $master_type = 'Repair charging';
        }
        if ($request->input('exampleInputBreakage') == '5') {
            $master_type = 'Repair buttons';
        }
        $id_master = DB::table('master')->where('work_type', $master_type)->value('id_master');
        $price = 0;
        if ($request->input('exampleInputMobile') == '1'&& $request->input('exampleInputBreakage') == '1'){
            $price = 110;
        }
        if ($request->input('exampleInputMobile') == '1'&& $request->input('exampleInputBreakage') == '2'){
            $price = 130;
        }
        if ($request->input('exampleInputMobile') == '1'&& $request->input('exampleInputBreakage') == '3'){
            $price = 150;
        }
        if ($request->input('exampleInputMobile') == '1'&& $request->input('exampleInputBreakage') == '4'){
            $price = 170;
        }
        if ($request->input('exampleInputMobile') == '1'&& $request->input('exampleInputBreakage') == '5'){
            $price = 190;
        }
        if ($request->input('exampleInputMobile') == '2'&& $request->input('exampleInputBreakage') == '1'){
            $price = 210;
        }
        if ($request->input('exampleInputMobile') == '2'&& $request->input('exampleInputBreakage') == '2'){
            $price = 230;
        }
        if ($request->input('exampleInputMobile') == '2'&& $request->input('exampleInputBreakage') == '3'){
            $price = 250;
        }
        if ($request->input('exampleInputMobile') == '2'&& $request->input('exampleInputBreakage') == '4'){
            $price = 270;
        }
        if ($request->input('exampleInputMobile') == '2'&& $request->input('exampleInputBreakage') == '5'){
            $price = 290;
        }
        if ($request->input('exampleInputMobile') == '3'&& $request->input('exampleInputBreakage') == '1'){
            $price = 310;
        }
        if ($request->input('exampleInputMobile') == '3'&& $request->input('exampleInputBreakage') == '2'){
            $price = 330;
        }
        if ($request->input('exampleInputMobile') == '3'&&$request->input('exampleInputBreakage') == '3'){
            $price = 350;
        }
        if ($request->input('exampleInputMobile') == '3'&& $request->input('exampleInputBreakage') == '4'){
            $price = 370;
        }
        if ($request->input('exampleInputMobile') == '3'&& $request->input('exampleInputBreakage') == '5'){
            $price = 390;
        }
        $id = DB::table('device')->where('model', $request->input('exampleInputModel'))->value('id_device');
        $client_id=DB::table('client')->where('user_id_user', $_SESSION['id'])->value('id_client');
        DB::table('order')->insert(['price' => $price, 'date' => $request->input('exampleInputDate'),
            'status' => 'Doing',
            'device_id_device' => $id, 'client_id_client' => $client_id, 'master_id_master' => $id_master]);
        return redirect()->route('showOrder');
    }
}
