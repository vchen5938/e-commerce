<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    public function items(){
        return $this->hasMany(\App\Item::class);
    }
}
