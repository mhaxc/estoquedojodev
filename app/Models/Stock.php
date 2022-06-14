<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
     protected $fillable=[
        'qtd','lote','product_id','stock_location_id'

    ];
     
    public function Products()
    {
       return $this->belongsToMany(Product::class,'product_id'); 

    }
     
    public function stock_locations()
    {
       return $this->belongsToMany(Stock_location::class,'stock_location_id'); 
    }

    use HasFactory;

}
