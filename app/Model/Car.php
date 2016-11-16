<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
      protected $fillable = ['name'];  

      protected $hidden = [
            'updated_at', 'created_at'
        ];
}
