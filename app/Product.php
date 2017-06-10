<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'typeid' , 'category', 'productname', 'showname', 'productid', 'specific', 'mfg', 'stock' ];
}
