<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $table = 'product_reviews';
    protected $fillable = [
        'product_id',
        'name',
        'email',
        'rating',
        'comment',
        'approved'
    ];
    
    protected $casts = [
        'approved' => 'boolean',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}