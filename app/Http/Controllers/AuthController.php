<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nib' => 'required',
            'email' => 'required|email',
        ]);

        $user = Umkm::where('nib', $request->nib)
                    ->where('email', $request->email)
                    ->first();

        if ($user) {
            session(['umkm_id' => $user->id]);
            return redirect('/dashboard'); // arahkan ke halaman dashboard UMKM kamu
        } else {
            return back()->with('error', 'NIB atau Email tidak cocok');
        }
    }
}
