<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
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
       // restituiamo il tipo di relazione hasMany() con il Model secondario Project.
        $this->belongsToMany(Category::class)->withTimestamps();
    }
}

