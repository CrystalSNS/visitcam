<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GeographiesModel extends Model {

	protected $table='geographies';
	public static function getGeography()
	{
		return GeographiesModel::orderBy('geo_id')->get();
	}


}
