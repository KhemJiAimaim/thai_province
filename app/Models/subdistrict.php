<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subdistrict extends Model
{
    use HasFactory;
    
    protected $table = 'subdistrict';//  กำหนดชื่อตารางตามที่คุณต้องการ

    protected $fillable = [
        'code', 'zip_code', 'name_th' , 'name_en', 'district_code'
    ];
}