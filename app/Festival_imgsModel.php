<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Festival_imgsModel extends Model {

	protected $table='eventimgs';
	public static function getEeventimgs($evtid)
	{
		return Festival_imgsModel::join('events','eventimgs.event_id','=','events.event_id')
		->where('eventimgs.event_id','=',$evtid)
		->select('eventimgs.*','events.event_title')
		->get();
		 // return Festival_imgsModel::orderBy('event_id')->get();
		 
	}

}
