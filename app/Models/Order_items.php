<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    protected $fillable=[
    'qtd','value','discount','perc_discount','order_id','order_id','product_id'
    ];
    use HasFactory;
   
    public function Products()
    {
       return $this->hasMany(Product::class); 

    }
    public function Ordes()
    {
       return $this->hasMany(Order::class); 
    }


}
