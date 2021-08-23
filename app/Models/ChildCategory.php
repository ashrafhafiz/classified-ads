<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChildCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'child_categories';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'slug', 'image');

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
}
