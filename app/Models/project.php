<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_sales_order',
        'project_id',
        'name_project',
        'date',
        'prospek',
        'order_date_so',
        'term_of_project',
        'delivery_date_so',
        'no_sppbj',
        'date_sppbj',
        'currency',
        'term_of_payment',
        'nilai_kontrak',
        'satus_project',
        'document_files'
    ];
}
