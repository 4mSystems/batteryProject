<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_image extends Model
{
    protected $fillable = ['detail_image','user_id', 'product_id'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function getProduct()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
