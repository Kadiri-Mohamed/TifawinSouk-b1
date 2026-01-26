<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory , SoftDeletes;

    private $fillable = [
        'nom', 'reference', 'description', 'prix', 
        'stock', 'image', 'category_id'
    ];

    protected $casts = [
        'stock' => 'integer',
        'prix' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
