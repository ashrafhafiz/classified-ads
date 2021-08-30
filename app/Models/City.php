<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cities';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'code', 'phonecode', 'status');

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}
