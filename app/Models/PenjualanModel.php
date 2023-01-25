<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenjualanModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'penjualan';
    protected $primaryKey = 'id_penjualan';
    protected $fillable = ['no_invoice', 'nama_pembeli', 'umur', 'no_telepon', 'alamat', 'kuantitas', 'kode_barang', 'total_harga',  'updated_at', 'created_at'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_pembeli', 'like', '%' . $search . '%');
        });
    }
}
