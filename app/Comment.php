<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'items';
	protected $hiden = ['id'];

	public function user(){
		return $this->belongsTo('App\User');
	}
		
}
