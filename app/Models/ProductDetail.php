<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'product_name',
        'length',
        'height',
        'depth',
        'customer_id',
        'customer_name',
        'project_id',
        'project_name',
        'address',
        'production_date',
        'delivery_date',
        'description',
    ];
}
