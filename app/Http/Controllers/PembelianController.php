<?php

namespace App\Http\Controllers;

use App\Models\PembelianModel;
use App\Models\SupplierModel;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembelian.supplieBarang', [
            'pembelians' => PembelianModel::join('supplier', 'pembelian.id_supplier', '=', 'supplier.id_supplier')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pembelian.create', [
            'suppliers' => SupplierModel::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kode = SupplierModel::where('id_supplier', '=', $request->pilihSupplier)->firstOrFail();
        $request->validate([
            'nama_barang' => 'required',
            'harga' => 'required',
            'kuantitas' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:1024',
            'deskripsi' => 'required',
        ]);
        // @dd($request);
        //upload image
        $image = $request->file('foto');
        $image->storeAs('images/barang', $image->hashName());

        $simpanData =  PembelianModel::create([
            'nama_barang' => $request->post('nama_barang'),
            'harga_beli' => $request->post('harga'),
            'kuantitas' => $request->post('kuantitas'),
            'foto' => $image->hashName(),
            'deskripsi' => $request->post('deskripsi'),
            'id_supplier' => $kode->id_supplier,
        ]);
        if ($simpanData) {
            return redirect()->route('pembelian')->with('success', 'data berhasil disimpan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
