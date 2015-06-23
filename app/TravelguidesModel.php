<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelguidesModel extends Model {

	protected $table='travelguides';
	public static function getTravelguides()
	{
		return TravelguidesModel::orderBy('trav_id')->get();
	}

}
