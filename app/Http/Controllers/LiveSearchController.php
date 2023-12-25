<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
    public function index()
    {
        return view('live-search');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $sql = "SELECT sd.*, pd.* FROM subdistrict AS sd
                JOIN(SELECT d.code AS d_code,
                        d.name_th AS d_name_th,
                        d.province_code AS province_code,
                        p.name_th AS province_name FROM district AS d
                JOIN provinces AS p ON d.province_code = p.code) AS pd
                ON pd.d_code = sd.district_code
                WHERE sd.zip_code = :zip_code
                -- GROUP BY sd.zip_code, pd.province_code
                -- JOIN district AS dt ON dt.code = sd.district_code
                ";

        $result = DB::select($sql, ['zip_code' => $query]);
        // dd($result);
        // ส่งผลลัพธ์เป็น HTML กลับไปยัง View
        return view('search-results', ['results' => $result]);
    }
}
