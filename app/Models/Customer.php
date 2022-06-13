<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','document','email','postal_code','address','neighborhood','city','number','state'];

    use HasFactory;
}
