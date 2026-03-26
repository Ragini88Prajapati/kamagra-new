<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminBannerModel extends Model
{
    protected $table = 'admin_banner';
    
    protected $fillable = [
        'desktop_image',
        'mobile_image',
        'title',
        'short_title',
        'url',
    ];
}
