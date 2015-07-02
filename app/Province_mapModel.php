<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_mapModel extends Model {

	//
	protected $table='provinces';
	public static function getPro_map()
	{
		return Province_mapModel::orderBy('pro_id')->get();
	}

}
