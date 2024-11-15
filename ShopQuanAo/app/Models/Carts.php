<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    //
    protected $table = 'carts';
    protected $fillable = ['user_id', 'product_id', 'quantity', 'price'];
    public $timestamp = false;
}
