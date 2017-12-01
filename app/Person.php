<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $table = "person";
	protected $primaryKey = 'idPerson';
	
	public function permission(){
		return $this->hasOne('App\Permission', 'idperson', 'idPerson');
	} 
	
	public function joinCourse(){
		return $this->hasManyThrough('App\Course', 'App\JoinCourse', 'idUser', 'idCourse', 'idPerson', 'idCourse');
	}
	
	public function createdCourse(){
		return $this->hasMany('App\Course', 'idCoach', 'idPerson');
	}
	
	public function likedCourse(){
		return $this->hasManyThrough('App\Course', 'App\takeLike', 'idperson', 'idCourse', 'idPerson', 'idPost')->where('likeType', 1);
	}
	
}
