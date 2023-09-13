<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addons extends Model
{
    use HasFactory;
     protected $table='addons';
    protected $fillable=['cat_id','item_id','name','price'];

    public function category(){
        return $this->hasOne('App\Models\Category','id','cat_id');
    }

    public function item(){
        return $this->hasOne('App\Models\Item','id','item_id');
    }
}
