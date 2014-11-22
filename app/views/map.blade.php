
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

  map.tinyMap({
    'center': ['25.041904178378704', '121.55848503112793'],
    'zoom': 14,
    'marker': [
    {
      'addr': ['25.041904178378704', '121.55848503112793'],
      'icon': {
        'url': '',
        'path': 'M0-165c-27.618 0-50 21.966-50 49.054C-50-88.849 0 0 0 0s50-88.849 50-115.946C50-143.034 27.605-165 0-165z',
        'fillColor': '#0E77E9',
        'fillOpacity': 1,
        'strokeColor': '',
        'strokeWeight': 0,
        'scale': 1/5,
        'rotation': 0
      },
      'id': 'A'
    }
    ]
  });


  $('#a').on('click', function () {
    r += 90;
    if (r >= 360) {
      r = 0;
    }
    map.tinyMap('modify', {
      'marker': [
      {
        'addr': ['25.041904178378704', '121.55848503112793'],
        'icon': {
          'url': '',
          'path': 'M0-165c-27.618 0-50 21.966-50 49.054C-50-88.849 0 0 0 0s50-88.849 50-115.946C50-143.034 27.605-165 0-165z',
          'fillColor': '#0E77E9',
          'fillOpacity': 1,
          'strokeColor': '',
          'strokeWeight': 0,
          'scale': 1/5,
          'rotation': r,
        },
        'id': 'A'
      }
      ]
    });
  });

</script>
</body>
</html>
