<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = PenjualanModel::all();


        return view('penjualan.penjualan', [
            'penjualans' => $penjualan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $penjualan = PenjualanModel::join('barang', 'kode_barang', '=', 'barang.kode_barang')->select('barang.kode_barang', 'barang.nama_barang');
        $barang = BarangModel::all();
        // @dd($penjualan);
        return view('penjualan.create', [
            'barangs' => $barang
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
        $request->validate([
            // 'nama_pembeli' => 'required',
            // 'umur' => 'required',
            // 'no_telepon' => 'required',
            // 'alamat' => 'required',
            // 'kuantitas' => 'required',
        ]);

        // dd($request->pilihBarang);
        $kode = BarangModel::where('kode_barang', '=', $request->pilihBarang)->firstOrFail();
        // @dd($kode);
        $total_harga = $kode->harga * $request->post('kuantitas');

        // $simpanData =  PenjualanModel::create([
        //     'no_invoice' => $kode,
        //     'nama_pembeli' => $request->post('nama_pembeli'),
        //     'umur' => $request->post('umur'),
        //     'no_telepon' => $request->post('no_telepon'),
        //     'alamat' => $request->post('alamat'),
        //     'kuantitas' => $request->post('kuantitas'),
        //     'kode_barang' => $kode->harga,
        //     'total_harga' => $total_harga,
        // ]);

        $babi = new PenjualanModel();
        $babi->no_invoice = $kode->kode_barang;
        $babi->nama_pembeli = $request->nama_pembeli;
        $babi->umur = $request->umur;
        $babi->alamat = $request->alamat;
        $babi->kuantitas = $request->kuantitas;
        $babi->kode_barang = $kode->kode_barang;
        $babi->no_telepon = $request->no_telepon;
        $babi->total_harga = $total_harga;
        // dd($babi);
        if ($babi->save()) {
            return redirect()->route('penjualan')->with('success', 'data berhasil disimpan');
        }

        // @dd($request);
        // if ($simpanData) {
        //     return redirect()->route('penjualan')->with('success', 'data berhasil disimpan');
        // }
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
