<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembelianModel extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $primaryKey = 'id_pembelian';
    protected $fillable = ['nama_barang', 'harga_beli', 'kuantitas', 'foto', 'deskripsi', 'id_supplier', 'created_at', 'updated_at'];
}
