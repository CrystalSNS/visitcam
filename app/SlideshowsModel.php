<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideshowsModel extends Model {

	protected $table='slideshows';
	public static function getSlide()
	{
		return SlideshowsModel::orderBy('slide_id')->get();
	}


}
