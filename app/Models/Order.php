<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'oredrs';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Resturant::class, 'resturant_id');
    }

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'order_meals', 'order_id', 'meal_id')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
