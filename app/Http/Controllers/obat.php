<?php

namespace App\Http\Controllers;

use App\Models\logM;
use App\Models\obat as ModelsObat;
use App\Models\obatM;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class obat extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $oM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user melihat page obat'
        ]);


          $oM = ModelsObat::all();
       return view('obat', compact('oM'));
    }

    public function create()
    {
        // $subtitle = "Daftar Produk";
        $oM = ModelsObat:: all();
        return view('obat_create', compact('oM'));
    }


    public function store(Request $request)
    {
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user menambah data obat'
        ]);

        $request->validate([
            'name'=> 'required',
            'jenis_obat'=> 'required', 
            'ket'=> 'required', 
            
        ]);
 
        ModelsObat::create($request->post());
        return redirect()->route('obat.index')->with('success', 'obat Berhasil Ditambahkan');
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    {
        // $subtitle = "Daftar Edit";
        $oM = ModelsObat::find($id);
        return view ('obat_edit', compact('oM'));   
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user mengedit data obat'
        ]);

        $request->validate([
            'name'=> 'required',
            'jenis_obat'=> 'required', 
            'ket'=> 'required', 
        ]);

        $data = request()->except(['_token', '_method', 'submit']);

        ModelsObat::where('id',$id)->update($data);
        return redirect()->route('obat.index')->with('success', 'obat Berhasil Diperbaharui');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user mengapus data obat'
        ]);
        ModelsObat::where('id',$id)->delete();
        return redirect()->route('obat.index')->with('success', 'obat Berhasil Dihapus');
    }
}
