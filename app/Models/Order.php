<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
protected $fillable=[
    'number','date','type','status','observation','user_id','customer_id'
];
public function Users()
{
    return $this->hasMany(User::class);
}
 public function Customers()
{
    return $this->hasMany(Customer::class);
}

}
