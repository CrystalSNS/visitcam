<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_detailModel extends Model {

	//
	protected $table='prooverviews';
	public static function getPro_detail()
	{
		return Province_detailModel::orderBy('ov_id')->get();
	}


}
