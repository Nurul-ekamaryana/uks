<?php

namespace App\Http\Controllers;

use App\Models\logM;
use App\Models\siswa as siswaM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class siswa extends Controller
{
    public function index()
    {
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user melihat Siswa'
        ]);
    
        $sM = siswaM::all();
        $tS = count($sM);
    
        return view('siswa', compact('sM', 'tS'));
    }
    
    public function create()
    {
        // $subtitle = "Daftar Produk";
        $sM = siswaM:: all();
        return view('siswa_create', compact('sM'));
    }


    public function store(Request $request)
    {
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user menambah siswa'
        ]);

        $request->validate([
            'nis'=> 'required',
            'name'=> 'required', 
            'kelas'=> 'required', 
        ]);
 
        siswaM::create($request->post());
        return redirect()->route('siswa.index')->with('success', 'siswa Berhasil Ditambahkan');
    }


    public function edit($id)
    {
        // $subtitle = "Daftar Edit";
        $sM = siswaM::find($id);
        return view ('siswa_edit', compact('sM'));   
    }

    public function update(Request $request, $id)
    {
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user mengedit siswa'
        ]);

        $request->validate([
            'nis'=> 'required',
            'name'=> 'required', 
            'kelas'=> 'required', 
        ]);

        $data = request()->except(['_token', '_method', 'submit']);

        siswaM::where('id',$id)->update($data);
        return redirect()->route('siswa.index')->with('success', 'siswa Berhasil Diperbaharui');
    }


    public function destroy($id)
    {
        
        siswaM::where('id',$id)->delete();
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user mengahupus data siswa'
        ]);
        
        return redirect()->route('siswa.index')->with('success', 'siswa Berhasil Dihapus');
    }
}
