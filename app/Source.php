<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $table = 'sources';
	protected $hiden = ['id'];

	public function item(){
		return $this->belongsTo('App\Item','item_id','id');
	}
}
