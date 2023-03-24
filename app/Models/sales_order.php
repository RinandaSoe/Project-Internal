<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class sales_order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'sales_order_id',
        'customer_id',
        'order_date',
        'delivery_date',
    ];

}
