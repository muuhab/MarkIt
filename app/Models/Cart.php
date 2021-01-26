<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function element(){
       return $this->belongsToMany(Product::class,'item_id');
    }

}
