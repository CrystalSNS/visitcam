<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ReligionsModel extends Model {

	
	protected $table='Religions';
	public static function getReligion()
	{
		return ReligionsModel::orderBy('rel_id')->get();
	}

}
