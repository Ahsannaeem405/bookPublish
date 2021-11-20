<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function mybook(){

        return $this->belongsTo('App\Models\User', 'user_id'); 
    }
   // use HasFactory;

}
