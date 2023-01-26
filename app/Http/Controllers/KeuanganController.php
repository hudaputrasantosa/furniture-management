<?php

namespace App\Http\Controllers;

use App\Models\PenjualanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function index()
    {

        if (isset($_GET['tahun1']) && $_GET['tahun2']) {
            $data = DB::table('penjualan')
                ->join('barang', 'penjualan.kode_barang', '=', 'barang.kode_barang')
                ->where('created_at', '>=', $_GET['tahun1'])
                ->where('created_at', '<=', $_GET['tahun2'])
                ->paginate(6);
        } else {
            $data = PenjualanModel::join('barang', 'penjualan.kode_barang', '=', 'barang.kode_barang')->filter(request(['search']))->paginate(6);
            // $jumlah = PenjualanModel::all()->select('sum(total_harga)');
        }
        // dd($data);

        return view('keuangan.keuangan', [
            'datas' => $data,
            // 'jumlah' => $jumlah
        ]);
    }
}
