<?php

namespace App\Http\Controllers;

use App\Models\logM;
use App\Models\obat;
use App\Models\record as ModelsRecord;
use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class record extends Controller
{
    public function index() {

        // $oM = logM::create([
        //     'id_user' => Auth::user()->id,
        //     'activity' => 'user melihat page recod'
        // ]);

        $recordM = ModelsRecord::select(
                'obat.*', 'siswa.*', 'record.*',
                'siswa.name AS name_siswa',
                'obat.name AS name_obat',
                'record.id AS id_record',
                'siswa.created_at AS tg_siswa',
                'obat.created_at AS tg_obat',
                'record.created_at AS tg'
            )
            ->leftJoin('siswa', 'siswa.id', '=', 'record.id_siswa')
            ->leftJoin('obat', 'obat.id', '=', 'record.id_obat')
            ->paginate(10);
    
        return view('record', compact('recordM'));
    }
    

    public function create(){
        // $subtitle = "Transaksi Create";
        $siswa = siswa:: all();
        // $obat = obat:: all();
        $record = ModelsRecord:: all();
        return view('create_r', compact('record','siswa'));
    }

    public function store(Request $request)
    {
        // $oM = logM::create([
        //     'id_user' => Auth::user()->id,
        //     'activity' => 'user menambah record'
        // ]);

        $validatedData = $request->validate([
            'id_siswa' => 'required', 
            // 'id_obat' => 'required', 
            'keluhan' => 'required',
            'status' => 'required',
        ]);

        ModelsRecord::create($validatedData);

        return redirect()->route('record.index')->with('success', 'Datasiswa Berhasil ditambahkan.');

    }

    public function edit($id)
    {
         // $subtitle = "Transaksi Create";
         $siswa = siswa:: all();
        //  $obat = obat:: all();
         $record = ModelsRecord::find($id);
         return view ('record_edit', compact('siswa','record'));   
    }
    
    public function update(Request $request, $id)
    {

        // $oM = logM::create([
        //     'id_user' => Auth::user()->id,
        //     'activity' => 'user mengedit record'
        // ]);

        $siswa = siswa::
        where("id", $request->input('id_siswa'))->first();
        $obat = obat::
        where("id", $request->input('id_obat'))->first();
        $request->validate([
            'id_siswa' => 'required', 
            // 'id_obat' => 'required', 
            'keluhan' => 'required',
            // 'dosis' => 'required',
            // 'status' => 'required',
        ]);

        $record = ModelsRecord::find($id);
        $record->keluhan = $request->input('keluhan');
        $record->id_siswa = $request->input('id_siswa');
        // $record->id_obat = $request->input('id_obat');
        // $record->status = $request->input('status');
        // $record->dosis = $request->input('dosis');
        $record->save();

        return redirect()->route('record.index')->with('success', 'Data record Berhasil Diperbaharui');
    }

    public function periksa($id)
    {
         // $subtitle = "Transaksi Create";
         $obat = obat:: all();
         $record = ModelsRecord::find($id);
         return view ('record_tambah', compact('obat','record'));   
    }
    
    public function siswa(Request $request, $id)
    {

        // $oM = logM::create([
        //     'id_user' => Auth::user()->id,
        //     'activity' => 'user memeriksa siswa'
        // ]);
        $siswa = siswa::
        where("id", $request->input('id_siswa'))->first();
        $obat = obat::
        where("id", $request->input('id_obat'))->first();
        $request->validate([
            'id_obat' => 'nullable', 
            'dosis' => 'nullable',
            'status' => 'required',
        ]);

        $record = ModelsRecord::find($id);
        // $record->keluhan = $request->input('keluhan');
        // $record->id_siswa = $request->input('id_siswa');
        $record->id_obat = $request->input('id_obat');
        $record->status = $request->input('status');
        $record->dosis = $request->input('dosis');
        $record->save();

        return redirect()->route('record.index')->with('success', 'Data record Berhasil Diperbaharui');
    }

    public function pdf($id)
    {
        // $oM = logM::create([
        //     'id_user' => Auth::user()->id,
        //     'activity' => 'user mengprint siswa pulang'
        // ]);
       
        $t = ModelsRecord::select(
            'obat.*', 'siswa.*', 'record.*',
            'siswa.name AS name_siswa',
            'obat.name AS name_obat',
            'record.id AS id_record',
            'siswa.created_at AS tg_siswa',
            'obat.created_at AS tg_obat',
            'record.created_at AS tg'
        )
        ->leftJoin('siswa', 'siswa.id', '=', 'record.id_siswa')
        ->leftJoin('obat', 'obat.id', '=', 'record.id_obat')
        ->where('record.id', $id)->get();

        $pdf = PDF::loadview('pulang_pdf', ['t' => $t]);
        return $pdf->stream('pulang.pdf');
        }


        public function all()
        {
            return view('record_date');
        }

        public function pertanggal(Request $request)
        {
            // Gunakan tanggal yang diterima sesuai kebutuhan
            $tgl_awal = $request->input('tgl_awal');
            $tgl_akhir = $request->input('tgl_akhir');
            // dd(["tanggal awal: ".$tgl_awal, "tanggal akhir: ".$tgl_akhir]);

            $recordM = ModelsRecord::select(
                'obat.*', 'siswa.*', 'record.*',
                'siswa.name AS name_siswa',
                'obat.name AS name_obat',
                'record.id AS id_record',
                'siswa.created_at AS tg_siswa',
                'obat.created_at AS tg_obat',
                'record.created_at AS tg'
            )
            ->leftJoin('siswa', 'siswa.id', '=', 'record.id_siswa')
            ->leftJoin('obat', 'obat.id', '=', 'record.id_obat')
            ->whereBetween('record.created_at', [$tgl_awal, $tgl_akhir])
            ->get();

            $pdf = PDF::loadview('record_tgl', ['recordM' => $recordM]);
            return $pdf->stream('stgl.pdf');
        }
}