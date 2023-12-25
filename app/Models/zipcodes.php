<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class zipcodes extends Model
{
    use HasFactory;
    protected $fillable = [
        'code', 'zip_code', 'name_th' , 'name_en', 'district_code'
    ];
}