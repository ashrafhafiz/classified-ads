<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'countries';
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'code', 'phonecode', 'status');

    public function states()
    {
        return $this->hasMany(State::class, 'country_id');
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, State::class, 'country_id', 'state_id');
    }
}
