<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $fillable = ['name','Product_image','user_id'];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    
    public function getProductImageAttribute($img)
    {
         if ($img)
            return asset('public/uploads/Product_images') . '/' . $img;
        else
            return "";
    }
}
