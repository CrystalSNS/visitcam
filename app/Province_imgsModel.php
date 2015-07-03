<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_imgsModel extends Model {

	//
	protected $table='provinceimgs';
	public static function getPro_img($id)
	{
		return Province_imgsModel::join('provinces','provinceimgs.province_id','=','provinces.pro_id')
			->where('provinceimgs.province_id','=',$id)
			->select('provinceimgs.*','provinces.pro_name')
			->get();
		//return Province_detailModel::where ('province_id', '=', $id)->get();
	}


}
