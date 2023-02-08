<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thumbnail',
        'product_code',
        'category_id',
        'old_price',
        'percent_discount',
        'current_price',
        'description',
        'seo_keyword',  
        'seo_description',
        'seo_title',
        'status',
    ];
    public function parent(){
       return $this->belongsTo(Category::class);
    }
}
