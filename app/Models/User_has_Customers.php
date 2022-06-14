<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_Customers extends Model

{  
   protected $fillable=[
      'user_id','customer_id'
    ];


    public function users()
    {
       return $this->belongsToMany(User::class,'user_id'); 

    }
    
    public function customers()
    {
       return $this->hasMany(Customer::class,'customer_id'); 
    }
    use HasFactory;
}
