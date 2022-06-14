<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable=[
        'name','product_id'
    ];
    use HasFactory;

    
    public function Products()
    
    {
       return $this->belongsToMany(Product::class,'product_id'); 
    }


}
