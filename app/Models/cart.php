<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable =[
        'id',
        'product_id',
        'name',
        'price',
    ];


}
