<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Item extends Model
{
    use Translatable;

    protected $guarded = [];
    protected $touches = ['cgy'];
    protected $dates = ['sell_at'];
    protected $casts = ["json" => 'array'];
    protected $translatable = ['name', 'brand'];

    public function cgy(){
        return $this->belongsTo(\App\Cgy::class);
    }
    public function orders(){
        return $this->belongsToMany(\App\Order::class)->withTimeStamps();
    }

    public function getItemNameAttribute(){
        return strtoupper($this->name);

    }

    public function getNameAttribute($value){
        return strtoupper($value);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = 'New Name ' . $value; 
    }

    public function scopePrice($query){
        return $query->where('price', '>', '1000')->orderBy('id', 'desc');
    }

    public function scopeCgyId($query, $cgy_id){
        return $query->where('cgy_id', $cgy_id)->orderBy('id', 'desc');
    }

}
