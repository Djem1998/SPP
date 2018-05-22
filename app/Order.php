<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    public $primaryKey = 'id_order';
    public $incrementing = true;
    public $timestamps = false;
    public $fillable = ['price', 'date','status','device_id_device','client_id_client','master_id_master'];
}
