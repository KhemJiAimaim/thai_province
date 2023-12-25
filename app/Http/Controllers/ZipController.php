<?php

namespace App\Http\Controllers;

use App\Models\subdistrict;
use Illuminate\Http\Request;

class ZipController extends Controller
{
    //
    public function getzipcode(){
        $zipcode = subdistrict::all();

        return response()->json([
            'status' => 'success',
            'data' => $zipcode
        ], 200);
    }

    public function getzipcodeAll(){
        $zipcode = subdistrict::all(); //ubdistrict::limit(10)->get();
        return view('welcome', ['data' => $zipcode]);
    }
}