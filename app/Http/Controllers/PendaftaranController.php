<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nib' => 'required|unique:umkms,nib',
            'password' => 'required|min:6',
            'nama_usaha' => 'required|string',
        ]);

        Umkm::create([
            'nib' => $request->nib,
            'password' => Hash::make($request->password),
            'nama_usaha' => $request->nama_usaha,
        ]);

        return redirect('/pendaftaran')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }
}
