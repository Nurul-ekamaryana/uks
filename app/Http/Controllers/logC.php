<?php

namespace App\Http\Controllers;

use App\Models\logM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logC extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
    
        $LogM = logM::create([
            'id_user' => Auth::user()->id,
            'activity' => 'user Melihat History'
        ]);

        $oM = LogM::select('users.name', 'users.username', 'users.role','logs.activity', 'logs.created_at')
        ->join('users', 'users.id', '=', 'logs.id_user')->orderBy('logs.id', 'desc');

            if ($user->role == 'admin') {
                $oM = $oM->whereIn('users.role', ['petugas uks', 'admin'])->SimplePaginate(25);
            } elseif ($user->role == 'petugas uks') {
                $oM = $oM->where('users.role', 'petugas uks')->where('users.id', $user->id)->SimplePaginate(25);
            } else {
                // Handle other roles if needed
            }
    
            return view('log', compact('oM'));
        
    }
    }
