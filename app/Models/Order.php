<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'folio',
        'client_id',
        'prime_id',
        'quantity',
        'coupon_id',
        'status',
        'payment_method',
        'amount',
    ];


    public function client(){
        return $this->belongsTo('App\Models\Client');
    }
    public function primes(){
        return $this->hasMany('App\Models\Prime');
    }
    public function coupons(){
        return $this->hasMany('App\Models\Coupon');
    }
}
