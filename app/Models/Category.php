<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'thumbnail',
        'title',
        'seo_keyword',
        'seo_description',
        'seo_title',
    ];

}
