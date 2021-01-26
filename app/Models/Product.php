<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

   // public function user(){

     //   return $this->belongsTo('App\User');
    //}


    public function user()
    {
           return $this->belongsToMany('App\User');
           #return $this->belongsToMany(User::class,'user_id');
    }

    public function cart()
    {
             #return $this->belongsToMany(cart::class);
             return $this->belongsTo(cart::class,'id');
     }

}
