<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportatioinsModel extends Model {

		protected $table='transportations';
	public static function getTransportation()
	{
		return TransportatioinsModel::orderBy('tran_id')->get();
	}

}
