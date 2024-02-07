<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userC extends Controller
{
    public function index()
    {
        // $LogM = LogM::create([
        //     'id_user' => Auth::user()->id,
        //     'activity' => 'user melihat users'
        // ]);

        // $subtitle = "Daftar Pengguna";
       $userM = User :: all();
    //    $vcari = request('search');
    //    $usersM = User::search(request('search'))->paginate(10);
       return view('users', compact('userM'));
    }

    public function create()
    {
        $userM = User:: all();
        return view('user_create', compact('userM'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'name'=> 'required',
            'username' => 'required|unique:users',
            'password'=> 'required',
            'password_confirm'=> 'required',
            'role'=> 'required',
        ]);
 
        $user =  new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        $user->save();

        return redirect()->route('user.index')->with('success', 'pengguna Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
         User::where('id',$id)->delete();
       
        return redirect()->route('user.index')->with('success', 'pengguna Berhasil Dihapus');
    }

    public function changepassword($id)
    {
        $userM = User::find($id);
        return view('change_password', compact( 'userM'));
    }

    public function change(Request $request, $id)
    {
    
        $request->validate([
            'password_new' => 'required',
            'password_confirm' => 'required|same:password_new',
            
        ]);
        $users = User::where("id", $id)->first();
        $users->update([
            'password' => Hash::make($request->password_new),
        
        ]);
        return redirect()->route('user.index')->with('success', 'Kata Sandi berhasil diperbaharui !');

}


     public function edit($id)
    {
       
        $users = User::find($id);
        return view ('users_edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
      
            'name'=> 'required',
            'username'=> 'required',
            'role'=> 'required',
        ]);

        $data = request()->except(['_token', '_method', 'submit']);

        User::where('id',$id)->update($data);
        return redirect()->route('user.index')->with('success', 'pengguna Berhasil Diperbaharui');
    }

}
