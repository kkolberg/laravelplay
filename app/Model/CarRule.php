<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CarRule extends Model
{
    protected $hidden = [
    'updated_at', 'created_at'
    ];
}