<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_tourModel extends Model {

	//

	protected $table='tourplaces';
		public static function getPro_tour($id)
		{
			return Province_tourModel::join('provinces','tourplaces.province_id','=','provinces.pro_id')
			->where('tourplaces.province_id','=',$id)
			->select('tourplaces.*','provinces.pro_name')
			->get();
		
			//return Province_imgsModel::orderBy('pro_img_id')->get();
		}
}



