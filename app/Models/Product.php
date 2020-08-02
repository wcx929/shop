<?php
//商品model
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
	protected $fillable = [
                    'title', 'description', 'image', 'on_sale', 
                    'rating', 'sold_count', 'review_count', 'price'
    ];
    
    protected $casts = [
        'on_sale' => 'boolean', // on_sale 是一个布尔类型的字段
    ];
    // 与商品SKU关联
    public function skus()
    {
        return $this->hasMany(ProductSku::class);
    }

    // 与赠品加购关联
    public function fills()
    {
        return $this->hasMany(ProductFill::class);
    }
    //输出图片绝对路径
    public function getImageUrlAttribute()
    {
        // 如果 image 字段本身就已经是完整的 url 就直接返回
        if (Str::startsWith($this->attributes['image'], ['http://', 'https://'])) {
            return $this->attributes['image'];
        }
        return \Storage::disk('public')->url($this->attributes['image']);
    }

    public function setPicturesAttribute($pictures)
    {
        if (is_array($pictures)) {
            $this->attributes['pictures'] = json_encode($pictures);
        }
    }

    public function getPicturesAttribute($pictures)
    {
        return json_decode($pictures, true);
    }

    //加购
    public function test()
    {
        return $this->belongsToMany(ProductFill::class,"fills_product","product_id","fill_id");
    }

    //收花日期
    public function getWeekdayAttribute($value)
    {
        return explode(',', $value);
    }
    public function setWeekdayAttribute($value)
    {
        //tags 是分类字段名 我的叫tags
        $this->attributes['weekday'] = implode(',', $value);
    }

    //收花地区
    public function getSaleregionAttribute($value)
    {
        return explode(',', $value);
    }
    public function setSaleregionAttribute($value)
    {
        //tags 是分类字段名 我的叫tags
        $this->attributes['saleregion'] = implode(',', $value);
    }


    //分类模型关联
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
