<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Color;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_option extends Model
{   
    use HasFactory;

    protected $table = "product_options";

    public function products(){
        return $this->belongsTo(product::class);
    }
    public function sizes(){
        return $this->belongsTo(Size::class);
    }
    public function colors(){
        return $this->belongsTo(Color::class);
    }
}
