<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {
        //procura tabela em ordem alfabetica
        $this->belongsToMany(Product::class);
    }
}
