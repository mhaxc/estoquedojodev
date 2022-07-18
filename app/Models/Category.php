<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable=[
        'name','category_id','Product_id'
    ];
    use HasFactory;

    
    public function Product()
    
    {
    
      return $this->belongsToMany(Product::class,'product_id'); 

    }
    public function Categories()
    
    {
    
      return $this->belongsToMany(Category::class,'category_id'); 
    }



}
