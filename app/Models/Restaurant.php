<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function user()
    {
        // collegare oneToOne ad user Model
        return $this->belongsTo(User::class);
    }


    public function categories  ()
    { 
       // restituiamo il tipo di relazione hasMany() con il Model secondario Project.
        $this->hasMany(Category::class);
    }

}
