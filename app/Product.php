<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function shop(){
    	return $this->belongsto('App\Shop');
    }
}
