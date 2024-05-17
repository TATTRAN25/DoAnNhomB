<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';
    protected $primaryKey = 'voucher_id';

    protected $casts = [
        
    ];

    protected $fillable = [
        'voucher_name', 'voucher_quantity', 'voucher_detail', 'discount_percentage', 'begin_date', 'end_date'
    ];
}

