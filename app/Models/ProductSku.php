<?php
//商品SKU
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class ProductSku extends Model
{
	protected $fillable = ['title', 'description', 'price', 'stock','times','spec','spec_img'];
    //
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //输出图片绝对路径
    public function getSpecUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['spec_img'], ['http://', 'https://'])) {
            return $this->attributes['spec_img'];
        }
        return \Storage::disk('public')->url($this->attributes['spec_img']);
    }
}
