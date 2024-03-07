<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'vat',
        'address',
        'phone_number',
        'email',
        'image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function foodItem()
    {
        return $this->hasMany(FoodItem::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
