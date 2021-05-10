<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

    public function user()
    {
        //pertece a um usuario
        return $this->belongsTo(User::class);
    }
    public function products()
    {
        //tem varios produtos
        return $this->hasMany(Product::class);
    }

}
