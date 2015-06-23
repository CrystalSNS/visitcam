<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ProvincesModel extends Model {

	//
	protected $table='provinces';
	public static function getProvince()
	{
		return ProvincesModel::orderBy('pro_id')->get();
	}

}