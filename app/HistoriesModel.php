<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoriesModel extends Model {

	
	protected $table='histories';
	public static function getHistory()
	{
		return HistoriesModel::orderBy('his_id')->get();
	}

}
