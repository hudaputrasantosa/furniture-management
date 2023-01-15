<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BarangControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = BarangModel::all();
        return view('barang.barang', ['barangs' => $barangs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'deskripsi' => 'required',
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('images/barang', $image->hashName());

        $simpanData =  BarangModel::create([
            'nama_barang' => $request->post('nama_barang'),
            'harga' => $request->post('harga'),
            'stok' => $request->post('stok'),
            'foto' => $image->hashName(),
            'deskripsi' => $request->post('deskripsi'),
        ]);
        if ($simpanData) {
            return redirect('admin/barang')->with('success', 'data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = BarangModel::findOrFail($id);
        return view('barang.edit', compact('barang'));
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
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:1024',
            'deskripsi' => 'required',
        ]);

        $barang = BarangModel::find($id);

        if ($request->file('foto') == '') {
            $barang->update([
                'nama_barang' => $request->nama_barang,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'deskripsi' => $request->deskripsi
            ]);
        } else {
            // Storage::disk('local')->delete('public/images/barang/' . $barang->foto);

            $image = $request->file('foto');
            $image->storeAs('images/barang/', $image->hashName());

            $barang->update([
                'nama_barang' => $request->nama_barang,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'foto' => $image->hashName(),
                'deskripsi' => $request->deskripsi
            ]);
        }
        if ($barang) {
            return redirect()->route('barang')->with('success', 'Data Barang Berhasil di update');
        } else {
            return redirect()->route('barang')->with('error', 'Data Barang Gagal di update');
        }
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */

    public function destroy($id)
    {
        $barang = BarangModel::findOrFail($id);
        Storage::disk('local')->delete('public/images/barang/' . $barang->foto);
        $barang->delete();

        return redirect()->back();
    }
}
