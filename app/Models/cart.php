<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable =[
        'id',
        'product_id',
        'user_id',
        'name',
        'price',
    ];

public function user(){
    return $this->hasOne(User::class);
}
}
