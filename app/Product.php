<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['cat_id','title','price','description',];

    public function to_cat(){
        $this->belongsTo('App\Category','cat_id');
    }
}
