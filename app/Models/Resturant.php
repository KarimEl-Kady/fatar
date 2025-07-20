<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    //
    protected $table = 'resturants';

    protected $guarded = [];

    public function meals()
    {
        return $this->hasMany(Meal::class, 'resturant_id');
    }
}
