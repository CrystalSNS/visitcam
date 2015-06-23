<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Traditional_customesModel extends Model {

	protected $table='traditionals';
	public static function getTraditional()
	{
		return Traditional_customesModel::orderBy('cos_id')->get();
	}


}
