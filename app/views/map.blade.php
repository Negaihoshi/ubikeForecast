
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Information Security Management Execution System</title>
  <!-- <link rel="stylesheet" href="assets/css/pure-min.css">
  <link rel="stylesheet" href="assets/css/marketing.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="jquery.tinyMap.min.js"></script>
  <style type="text/css">
  #map {
    width: 1000px;
    height: 1000px;
    border: 1px solid #000;
  }
  </style>
</head>

<body>

  <div class="splash-container">
    Map View TEST
    <div id="map"></div>

  </div>
  <script>
  var map = $('#map');
  var r = 0;
  var geo = window.navigator.geolocation;
  geo.getCurrentPosition(geoSuccess, geoError);
  function geoError(event) {
    alert('請開啓定位功能');
  }
  function geoSuccess(event) {
    var l = event.coords.latitude;
    var y = event.coords.longitude;
    var center = ""+l+","+y;
    var myLocationMarker= {
      "marker":[
        {
          addr: center,
          text: '我的位置',
          icon: {
            url: 'http://www.clker.com/cliparts/e/B/I/t/W/u/pushed-pin-hi.png',
            scaledSize: new google.maps.Size(64, 64)
          },
          animation: 'DROP|BOUNCE'
        }
      ]
    };
    var ubikeLocation= {
      "marker":[
      {
        addr: "臺北市政府",
        text: '測試站點1',
        icon: {
          url: 'pin_pic/full.png',
          scaledSize: new google.maps.Size(64, 64)
        },
        animation: 'DROP|BOUNCE'
      },
      {
        addr: "大安捷運站",
        text: '測2試站點',
        icon: {
          url: 'pin_pic/34.png',
          scaledSize: new google.maps.Size(64, 64)
        },
        animation: 'DROP|BOUNCE'
      },
      {
        addr: "捷運科技大樓站",
        text: '測試站點3',
        icon: {
          url: 'pin_pic/empty.png',
          scaledSize: new google.maps.Size(64, 64)
        },
        animation: 'DROP|BOUNCE'
      }
      ]
    };
    map.tinyMap("panto",center);
    map.tinyMap("modify",myLocationMarker);
    map.tinyMap("modify",ubikeLocation);
  }

  map.tinyMap({
    // 'center': ['30.041904178378704', '121.55848503112793'],
    'autoLocation': true,
    'zoom': 14
  });


</script>
</body>
</html>
