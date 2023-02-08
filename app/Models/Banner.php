<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'thumbnail',
        'seo_keyword',
        'seo_description',
        'seo_title',
    ];

}
