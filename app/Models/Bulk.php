<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    protected $fillable =['slug','name'];




     public function products()
    {
        return $this->hasMany(Product::class);
    }

     public function alternativeunit()
    {
        return $this->hasMany(AlternativeUnit::class);
    }



     use HasFactory;
}