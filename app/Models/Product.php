<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'category', 'images', 'more_details', 'meta_title', 'meta_description', 'header_script'
    ];

    protected $casts = [
        'images' => 'array',  // Automatically cast the JSON to an array
    ];
}
