<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'kode_barang',
        'kode_barang_so',
        'nama_barang',
        'qty',
        'contract_price',
        'cost_price',
        // 'cash_flow',
    ];
}
