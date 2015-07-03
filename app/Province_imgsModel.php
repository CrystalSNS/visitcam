<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_imgsModel extends Model {

	//
	protected $table='provinceimgs';
		public static function getPro_imgs($id)
		{
			//return Province_imgsModel::where('provinceimgs.province_id','=',$id)
			//->get();

			 $obj = Province_imgsModel::join('provinces','provinceimgs.province_id','=','provinces.pro_id')
				->where('provinceimgs.province_id','=',$id)
				->select('provinceimgs.*','provinces.pro_name')
				->get();
			return $obj;
			//print_r($obj[0]['name']);
			//return Province_imgsModel::orderBy('pro_img_id')->get();
		}
}

