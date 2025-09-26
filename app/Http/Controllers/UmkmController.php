<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller; // ← baris ini penting!

class UmkmController extends Controller
{
    public function create()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'nib' => 'required|string|unique:umkms,nib',
            'pemilik' => 'required|string|max:255',
            'alamat' => 'required|string',
            'email' => 'required|email|unique:umkms,email',
            'telepon' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        try {
            $data = $request->all();
    
            if ($request->hasFile('foto')) {
                $data['foto'] = $request->file('foto')->store('foto_umkm', 'public');
            }
    
            \App\Models\Umkm::create($data);
    
            return redirect('/login')->with('success', 'Pendaftaran berhasil. Silakan login.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Pendaftaran gagal: ' . $e->getMessage());
        }
    }
    
}
