<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class geographies extends Model
{
    use HasFactory;
    protected $table = 'geographies'; // กำหนดชื่อตารางตามที่คุณต้องการ

    protected $fillable = [
        'id','name'
    ];
}