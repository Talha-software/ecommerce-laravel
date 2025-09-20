<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'product_name',
        'product_price',
        'product_description',
        'product_quantity',
        'product_image',
        'product_category'
    ];

}
