<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;
    protected $table = "policies";
    protected $fillable = [
        'id',
        'name',
        'subname',
        'thumbnail',
        'status',
        'description',
        'seo_title',
        'seo_keyword',
        'seo_description',
    ];
}
