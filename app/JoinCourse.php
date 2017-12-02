<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinCourse extends Model
{
    protected $table = 'joincourse';
	protected $primaryKey = 'idjoinCourse';
	public function takeLesson(){
		return $this -> hasMany('App\takeLesson', 'idJoinCourse', 'idjoinCourse');
	}
}
