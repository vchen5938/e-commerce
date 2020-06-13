<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items(){
        return $this->belongsToMany(\App\Item::class)->withTimeStamps()->withPivot('qty','description');
    }

    public function user(){
        return $this->belongsTo(\App\User::class);
    }
}
