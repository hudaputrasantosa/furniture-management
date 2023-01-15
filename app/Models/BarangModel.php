<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    protected $fillable = ['nama_barang', 'harga', 'stok', 'foto', 'deskripsi', 'updated_at', 'created_at'];
}
