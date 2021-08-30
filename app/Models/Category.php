<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'slug', 'image', 'created_at');

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

    public function childCategories()
    {
        return $this->hasManyThrough(ChildCategory::class, SubCategory::class, 'category_id', 'sub_category_id');
    }
}
