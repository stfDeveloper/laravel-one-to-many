<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title','content','slug','published','category_id'];
    public function category(){
        // many to one
        return $this->belongsTo('App\Category');
    }
}