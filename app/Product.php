<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function store()
    {
        //este produto pertecen a uma loja
        return $this->belongsTo(Store::class);
    }

    public function categories()
    {
        //pertence a varias categorias
        return $this->belongsToMany(Category::class);
    }
}
