<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title','description','url','images','category_id','status'];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
