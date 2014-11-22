<?php

class UbikeController extends BaseController {

	public function getUbike(){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://opendata.dot.taipei.gov.tw/opendata/gwjs_cityhall.json");
		curl_exec($ch);
		curl_close($ch);
	}


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


}
