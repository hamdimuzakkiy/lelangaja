<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $table = 'items';
	protected $hiden = ['id'];

    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }

    public function source(){
    	return $this->hasMany('App\Source','item_id','id');
    }
}

