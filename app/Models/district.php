<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class district extends Model
{
    use HasFactory;
    protected $table = 'district'; // กำหนดชื่อตารางตามที่คุณต้องการ

    protected $fillable = [
        'code','name_th' , 'name_en', 'province_code'
    ];
}