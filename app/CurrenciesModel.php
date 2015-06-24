<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrenciesModel extends Model {

	

protected $table='currencies';
	public static function getCurrency()
	{
		return CurrenciesModel::orderBy('cur_id')->get();
	}

}
