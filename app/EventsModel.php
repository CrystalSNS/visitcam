<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsModel extends Model {

	protected $table='events';
	public static function getEevents()
	{
		return EventsModel::orderBy('event_id')->get();
		
	}



}
