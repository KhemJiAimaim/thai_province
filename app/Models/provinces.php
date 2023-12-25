<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinces extends Model
{
    use HasFactory;
    protected $table = 'provinces'; // กำหนดชื่อตารางตามที่คุณต้องการ

    protected $fillable = [
        'code', 'name_th' ,'name_th_short', 'name_en', 'geography_id'
    ];
}