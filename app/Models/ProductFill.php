<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFill extends Model
{
    protected $fillable = [
                    'title', 'fill_sn', 'image', 'on_sale','price','stock',
    ];
    
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
}
