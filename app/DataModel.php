<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model {

	//
	protected $table='provinces';
	public static function getProvince()
	{
		return DataModel::orderBy('pro_id')->get();
	}

}