<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
protected $fillable=[
    'number','date','type','status','observation','user_id','customer_id','type_payment_id'
];

 public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function payment()
    {
        return $this->belongsTo(TypePayment::class,'type_payment_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
