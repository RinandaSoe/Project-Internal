<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor_jasa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'vendor_id',
        'kode_jasa',
        'tipe',
        'kode_jasa_so',
        'nama_jasa',
        'qty',
        'contract_price',
        'cost_price',
        'description',
    ];
}
