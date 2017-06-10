<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'purchased_at' , 'productid', 'productname', 'JPY_price', 'purchase_count', 'JPY_amount', 
    'exchange', 'purchase_from', 'payment_type', 'payment_amount', 'shipping_cost', 'shipping_type', 'flag', 'status' ];
    
}