<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{

		// echo DB::select('select Station.*,maxtime from Station, (select stationNo,remainBikes, max(created_at) as maxtime from Ubike group by stationNo) as Ubike WHERE (Station.stationNo = Ubike.stationNo) and (Station.stationNo = Ubike.stationNo) group by stationNo');
    	return View::make('home.list', [
				'stations'=> Station::paginate(15),
				'ubikes'=> Ubike::paginate(15)
			]);
	}

	public function map()
	{
		return View::make('home.map', [
			'stations'=> DB::select('select * from Station limit 50')
			]);
	}

	public function search()
	{
		$search = Input::get('search');
		return View::make('home.list');
	}

}
