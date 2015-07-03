<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_mapModel extends Model {

	//
	protected $table='provinces';
	public static function getPro_map($id)
	{
		//return Province_mapModel::orderBy('pro_id')->get($id);
		return Province_mapModel::where('provinces.pro_id','=',$id)
			->select('provinces.*')
			->get();
		
	}

}
