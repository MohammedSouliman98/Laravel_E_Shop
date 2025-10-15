<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_option;

class Size extends Model
{
    use HasFactory ; 

    public function options(){
        return $this->hasMany(Product_option::class);
    }
    public function products(){
        return $this->belongsToMany(product::class,'product_options', 'size_id', 'product_id');
    }

}
