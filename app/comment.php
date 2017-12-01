<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	protected $table = "comment";
	protected $primaryKey = "idComment";
    //
	
	public function likedPerson() {
		return $this->hasManyThrough('App\Person', 'App\takelike', 'idPost', 'idPerson', 'idComment', 'idPerson');
	}
	
	public function person() {
		return $this ->hasOne('App\Person', 'idPerson', 'idUser');
	}
	
}
