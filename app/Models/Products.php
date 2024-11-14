<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'brand_id', 'name', 'slug', 'images', 'description',  'is_active', 'price', 'is_active', 'is_featured', 'in_stock', 'on_sale'];

    protected $casts =[
        'images' => 'array',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function brands() {
        return $this->belongsTo(Brands::class);
    }
    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}