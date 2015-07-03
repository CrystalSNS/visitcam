<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_hotelsModel extends Model {

	//
	protected $table='hotels';
		public static function getPro_hotel($id)
		{
			return Province_hotelsModel::join('provinces','hotels.province_id','=','provinces.pro_id')
			->where('hotels.province_id','=',$id)
			->select('hotels.*','provinces.pro_name')
			->get();

		}
		
}
