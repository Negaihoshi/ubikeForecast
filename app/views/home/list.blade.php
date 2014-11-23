@extends('master')

@section('content')
  <div id="show" class="panel panel-default sun">
    <div class="pannel-body">
      <div id="img">
        <img width="200px" height="200px" src="/img/sm_sun.png" >
      </div>
      <div id="word">
        <div id="station">捷運港乾站</div>
        <div id="percentage">75 %</div>
      </div>
      <div class="clear"></div>
    </div>
    <div style="position: relative;left: -2%;">
      <table id="tb-border">
        <thead>
          <tr>
            <th>id</th>
            <th>area</th>
            <th>name</th>
            <th>ubike</th>
            <th>percentage</th>
          </tr>
        </thead>
        <tbody>
          @foreach($stations as $key => $station)
            <?php
              $percentage2 = $ubikes[$key]['remainBikes'] / $station['totalBikes'];
              if($percentage2 > 0.67) $percentage = 1;
              else if($percentage2 > 0.34) $percentage = 2;
              else $percentage = 3
            ?>


            <tr key="{{$key}}" name="{{ $station['stationName']}} " percentage="{{ $percentage2 }}">
              <td> {{ $key+1 }} </td>
              <td> {{ $station['stationArea'] }} </td>
              <td> {{ $station['stationName']}} </td>
              <td> {{ $ubikes[$key]['remainBikes']."/".$station['totalBikes']}} </td>
              <td> {{ $ubikes[$key]['remainBikes'] / $station['totalBikes'] }} </td>
            </tr>
          @endforeach

        </tbody>
        <tfoot>

        </tfoot>
      </table>
      {{ $stations->links(); }}
    </div>
  </div>

@stop
