<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* use App\Model\Restaurant; */
/* use App\Model\Orders; */

class FoodItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'restaurant_id',
        'description',
        'ingredients',
        'price',
        'image_url',
    ];


    /* public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    } */
    /* public function orders()
    {
        return $this->belongsToMany(Restaurant::class);
    } */
}
