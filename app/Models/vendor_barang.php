<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor_barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'vendor_id',
        'kode_barang',
        'satuan',
        'kode_barang_so',
        'nama_barang',
        'qty',
        'contract_price',
        'cost_price',
        'description',
    ];
}
