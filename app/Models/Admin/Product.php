<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Gender;

class Product extends Model
{
    protected $table  =  'product';
    protected $guarded  = [];

    function product_images()
    {
        return $this->hasMany(Product_images::class)->where('status', 1);
    }

    function brand()
    {
        return $this->belongsTo(Brand::class)->select('id', 'name', 'description')->where('status', 1);
    }

    function gender()
    {
        return $this->belongsTo(Gender::class)->select('id', 'name', 'description')->where('status', 1);
    }

    function category()
    {
        return $this->belongsTo(Category::class, 'category_id')->select('id', 'name', 'description')->where('status', 1);
    }
    
    public function reviews()
    {
        return $this->hasMany(\App\Models\Client\ProductReview::class, 'product_id');
    }
    
    public function approvedReviews()
    {
        return $this->hasMany(\App\Models\Client\ProductReview::class, 'product_id')->where('approved', true);
    }
    
    public function avgRating()
    {
        return $this->approvedReviews()->avg('rating');
    }
    
    public function reviewsCount()
    {
        return $this->approvedReviews()->count();
    }
}
