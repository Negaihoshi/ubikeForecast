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
    $temp = curl_exec($ch);
    curl_close($ch);
    return $temp;
  }
  public function show(){
    // $ublikeList = file_get_contents("ubike/get");
    // $uri = Request::path("/ubike/index");
    // return $uri;
    // return $ublikeList;

    $ubikeList = App::make('UbikeController')->index();
    $ubikeList = json_decode($ubikeList);
    if(is_object($ubikeList)){
      echo "這個是物件";
    }

    // $ubikeList = ;
    // echo var_dump($ubikeList);

    // echo $ubikeList;
    // foreach ($ubikeList as $ublikeObj) {
    //   $ubike = new Ubike;
    //
    //   $ubike->ItemId = $ublikeObj->iid;
    //   $ubike->Total_bikes = $ublikeObj->tot;
    //   $ubike->Remain_bikes = $ublikeObj->sbi;
    //
    //   $ubike->save();
    // }
  }

}
