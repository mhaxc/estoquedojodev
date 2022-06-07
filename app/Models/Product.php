<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','price','description','color','qtd','height','width','depth','category_id','bulks_slug'
    ];
    
    public function Categories()
{
    return $this->hasMany(Category::class);
}
  public function Bulks()
{
    return $this->hasMany(Bulk::class);
}
    
}
