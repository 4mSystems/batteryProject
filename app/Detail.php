<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['type','L','W','H','lid_options','user_id', 'product_id'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function getProduct()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
