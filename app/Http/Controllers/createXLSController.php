<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Excel;

class createXLSController extends Controller
{
    public function show()
    {

        Excel::create('XLSReport', function ($excel) {

            // Set the title
            $excel->setTitle('Report');

            // Chain the setters
            $excel->setCreator('Djem')
                ->setCompany('Djem');
            $excel->sheet('Sheetname', function ($sheet) {

                $sheet->setOrientation('landscape');
                $sheet->setPageMargin(array(0.25, 0.30, 0.25, 0.30));
                $sheet->setPageMargin(0.25);
                $sheet->setStyle(array(
                    'font' => array(
                        'name' => 'Calibri',
                        'size' => 15,
                        'bold' => true
                    )
                ));

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

                $sheet->rows(array(
                    array('Order id', 'Price','Date', 'Status', 'Client id', 'Master id', 'Device id'),
                    array($id_order, $price, $date, $status, $id_client, $id_master, $id_device)
                ));
            });

        })->export('xls');
    }
}
