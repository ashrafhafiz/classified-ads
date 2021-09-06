<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'advertisements';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    // protected $garded = [];
    protected $fillable = [
        'user_id',
        'feature_image',
        'first_image',
        'second_image',
        'category_id',
        'sub_category_id',
        'child_category',
        'name',
        'slug',
        'description',
        'price',
        'price_status',
        'product_condition',
        'listing_location',
        'country_id',
        'state_id',
        'city_id',
        'phone_number',
        'published',
        'link'
    ];
}
