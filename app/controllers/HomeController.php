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
		$stationList = array();
		// $ubikes = DB::table('Ubike')->paginate(15);
		// echo $ubikes;

		// $Ubikes = Ubike::paginate(15);
		// echo $Ubikes;


		$tt = [
			"name" => "Hello",
			"percentage" => 1,
		];

		array_push($stationList, $tt);
		array_push($stationList, $tt);
		array_push($stationList, $tt);
		array_push($stationList, $tt);

		$returnObj = [
			'stationList' => $stationList
		];

    	return View::make('home.list', [
				'stations'=> Station::paginate(15),
				'ubikes'=> Ubike::paginate(15)
			]);
	}

	public function map()
	{
    	return View::make('home.map');
	}


}
