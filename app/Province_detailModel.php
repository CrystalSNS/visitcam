<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_detailModel extends Model {

	//
	protected $table='prooverviews';
	public static function getPro_detail($id)
	{
		return Province_detailModel::join('provinces','prooverviews.province_id','=','provinces.pro_id')
			->where('prooverviews.province_id','=',$id)
			->select('prooverviews.*','provinces.pro_name')
			->get();
		//return Province_detailModel::where ('province_id', '=', $id)->get();
	}


}
