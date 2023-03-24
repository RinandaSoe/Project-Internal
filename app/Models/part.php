<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class part extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'vendor',
        'qty',
        'contract_price',
        'cost_price',
        'cash_flow',
    ];
}
