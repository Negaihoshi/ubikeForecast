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

		$tt = [
			"tt" => "mm",
			"kk" => "kk",
			"dd" => "dd"
		];

		array_push($stationList, $tt);
		array_push($stationList, $tt);
		array_push($stationList, $tt);
		array_push($stationList, $tt);

		$returnObj = [
			'stationList' => $stationList
		];

    	return View::make('main.list', $returnObj);
	}

	public function map()
	{
    	return View::make('main.map');
	}


}
