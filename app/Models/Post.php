<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
   protected $guarded = [];

   public function user() 
   {
      return $this->belongsTo('App\Models\User');
   }
}