<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use App\Models\Penjualan;

class ReportController extends Controller
{
    public function today()
    {
        $terbanyak = Mobil::withSum('penjualan','qty')
        ->orderBy('penjualan_sum_qty','desc')
        ->first();
        // dd($terbanyak);
        return view('report.today',['terbanyak'=>$terbanyak]);
    }
}
