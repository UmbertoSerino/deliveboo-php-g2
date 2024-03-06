<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function restaurants()
    { 
       // restituiamo il tipo di relazione hasMany() con il Model secondario Project.
        $this->hasMany(Restaurant::class);
    }

    
}
