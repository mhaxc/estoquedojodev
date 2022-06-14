<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternative_Unit extends Model
{
    protected $fillable=[
        'id','qtd','divide_or_multiply','products_id','bulks_slug'

];

public function Product()
    {
       return $this->belongsToMany(Product::class,'products_id'); 

    }
public function Bulks()
{
    return $this->belongsToMany(Bulk::class,'bulks_slug');
}
    
    use HasFactory;
}
