<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrepaidBalance extends Model
{
    protected $fillable = ['mobile_phone','value','persen','total','order_number'];
}

