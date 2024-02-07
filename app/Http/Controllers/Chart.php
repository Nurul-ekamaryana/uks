<?php

namespace App\Http\Controllers;

use App\Charts\RecordChart;
use App\Models\obat;
use App\Models\record;
use App\Models\siswa;
use App\Models\User;
use Illuminate\Http\Request;

class Chart extends Controller
{
    public function index(RecordChart $chart)
    {
        $sM = Siswa::all();
        $oM = obat::all();
        $rM = record::all();
        $uM = User::all();
        $totalSiswa = count($sM);
        $totalObat = count($oM);
        $totalRecord = count($rM);
        $totalUser = count($uM);
    
        // Pass the 'totalSiswa' variable to the 'siswa' view
        return view('dashboard', compact('totalSiswa', 'totalUser', 'totalObat', 'totalRecord'))->with(['chart' => $chart->build()]);
    }
    
}
