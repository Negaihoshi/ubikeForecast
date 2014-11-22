

<?php

class UbikeController extends BaseController {

  public function index(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://opendata.dot.taipei.gov.tw/opendata/gwjs_cityhall.json");
    curl_exec($ch);
    curl_close($ch);
  }
  public function show(){
    // $ublikeList = file_get_contents("ubike/get");
    $uri = Request::path("/ubike/index");
    return $uri;
    // return $ublikeList;
  }

}
