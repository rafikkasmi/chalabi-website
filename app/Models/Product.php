<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
     //gender constants
    const WOMEN=1;
    const MEN=2;
    //metal constants
    const GOLD=1;
    const DIAMOND=2;

    protected $fillable = [
        'cate_id',
        'name',
        'slug',
        'description',
        'original_price',
        'selling_price',
        'image',
        'type',
        'gender',
        'poids',
        'brand',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cate_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
