<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_hotelsModel extends Model {

	//
	protected $table='hotels';
		public static function getPro_hotel()
		{
			return Province_hotelsModel::orderBy('ho_id')->get();
		}



}
