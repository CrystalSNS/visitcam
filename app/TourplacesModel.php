<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TourplacesModel extends Model {

	protected $table='tourplaces';
	public static function gettourPlace($name)
	{
		return TourplacesModel::join('categories','tourplaces.category_id','=','categories.cat_id')
			->where('categories.cat_name','=',$name)
			->select('tourplaces.*','categories.cat_name','categories.cat_id')
			->get();
		//return Province_detailModel::where ('province_id', '=', $id)->get();
	}

	public static function gettourPlacelimit($name)
	{
		return TourplacesModel::join('categories','tourplaces.category_id','=','categories.cat_id')
			->where('categories.cat_name','=',$name)
			->select('tourplaces.*','categories.cat_name','categories.cat_id')
			->limit(4)
			->get();
		//return Province_detailModel::where ('province_id', '=', $id)->get();
	}

}
