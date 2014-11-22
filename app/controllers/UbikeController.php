

<?php

class UbikeController extends BaseController {

  public function getUbike(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://opendata.dot.taipei.gov.tw/opendata/gwjs_cityhall.json");
    curl_exec($ch);
    curl_close($ch);
  }
}
