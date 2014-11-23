@extends('master')

@section('content')


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

@stop
