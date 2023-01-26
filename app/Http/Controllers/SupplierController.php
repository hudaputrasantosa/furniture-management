<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier.supplier', [
            'suppliers' => SupplierModel::latest()->paginate(6),
        ]);
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ]);

        //upload image
        $image = $request->file('foto');
        $image->storeAs('images/supplier', $image->hashName());

        $simpanData =  SupplierModel::create([
            'nama_supplier' => $request->post('nama_supplier'),
            'no_telepon' => $request->post('no_telepon'),
            'alamat' => $request->post('alamat'),
            'foto' => $image->hashName(),
        ]);
        if ($simpanData) {
            return redirect()->route('supplier')->with('success', 'data berhasil disimpan');
        }
    }
}
