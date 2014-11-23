@extends('master')

@section('content')

  <div class="splash-container">
    Map View TEST
    <div id="map"></div>

  </div>
  <script>
  var stations = JSON.parse( '<?php echo json_encode($stations, JSON_FORCE_OBJECT) ?>' );

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
        addr: ['25.037467', '121.564077'],
        text: '25.0408578889',
        icon: {
          url: 'pin_pic/full.png',
          scaledSize: new google.maps.Size(64, 64)
        },
        animation: 'DROP|BOUNCE'
      }
      ]
    };
    // alert(stations;

    for (key in stations) {
      var station = stations[key];
      var addr = [station.longitude, station.latitude];
      var mark = {
        addr: addr,
        text: station.stationName,
        icon: {
          url: 'pin_pic/empty.png',
          scaledSize: new google.maps.Size(64, 64)
        }
      }
      ubikeLocation.marker.push(mark);
    }
    console.log("stationsstationsstations",ubikeLocation);

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
