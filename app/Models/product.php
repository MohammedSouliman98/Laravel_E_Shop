<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_option;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
'name',
'description',
'price',
'category',
'size_options',
'rate',
'stock',
'is_trend'];

public function scopePrice($query,$minprice = null , $maxprice = null ,string $category = null ){
if($minprice !== null && $maxprice !== null ){
    return product::wherebetween('price', [$minprice, $maxprice]);
}
if($category !== null){
    return product::where('category' , 'men');
}

}

public function category(){
    return $this->belongsTo(category::class);
}
public function options(){
    return $this->hasMany(Product_option::class);
}
public function colors(){
    return $this->belongsToMany(Color::class);
}
public function sizes(){
    return $this->belongsToMany(Size::class);
}
}


