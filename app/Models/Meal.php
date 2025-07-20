<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    /** @use HasFactory<\Database\Factories\MealFactory> */
    use HasFactory;

    protected $table = 'meals';

    protected $guarded = [];

    public function resturant()
    {
        return $this->belongsTo(Resturant::class, 'resturant_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_meals', 'meal_id', 'order_id')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
