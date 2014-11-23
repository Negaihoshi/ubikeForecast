<?php

class UbikeController extends BaseController {

	public function dataGet()
	{
		$result = array();
		$sqlData = DB::table('Ubike')->select('ItemId','Total_bikes','Remain_bikes')->get();
		foreach ($sqlData as $resultData)
		{
			var_dump($resultData);
			array_push($result, $resultData);
		}

		return json_encode($result);
	}

  public function index(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://opendata.dot.taipei.gov.tw/opendata/gwjs_cityhall.json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $temp = curl_exec($ch);
    curl_close($ch);
    return $temp;
  }
  public function store(){
    // $ublikeList = file_get_contents("ubike/get");
    // $uri = Request::path("/ubike/index");
    // return $uri;
    // return $ublikeList;

    $ubikeList = App::make('UbikeController')->index();

    $ubikeList = json_decode($ubikeList);
    $ubikeList = $ubikeList->retVal;
    // var_dump($ubikeList);

    // echo var_dump($ubikeList);

    // echo $ubikeList;
    foreach ($ubikeList as $ublikeObj) {
      $ubike = new Ubike;

			$ubike->stationNo = $ublikeObj->sno;
			$ubike->active = $ublikeObj->sv;
			$ubike->stationName = $ublikeObj->sna;
			$ubike->stationLocation = $ublikeObj->ar;

			$ubike->totalBikes = $ublikeObj->tot;

			$ubike->remainBikes = $ublikeObj->sbi;

			$ubike->longitude = $ublikeObj->lat;
			$ubike->latitude = $ublikeObj->lng;

      $ubike->save();
    }
  }

}
