<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Umkm;

class ProdukController extends Controller
{
    public function index()
    {
        $umkm = Umkm::find(session('umkm_id'));
        $produks = Produk::where('umkm_id', $umkm->id)->get();
        return view('umkm.produk', compact('produks'));
    }

    public function create()
    {
        return view('umkm.tambah-produk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Produk::create([
            'umkm_id' => session('umkm_id'),
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect('/produk-saya')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Produk $produk)
    {
        return view('umkm.edit-produk', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $produk->update($request->only(['nama_produk', 'deskripsi', 'harga', 'stok']));

        return redirect('/produk-saya')->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return back()->with('success', 'Produk berhasil dihapus!');
    }
}
