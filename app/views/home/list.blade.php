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
            <th>區域</th>
            <th>站名</th>
            <th>剩餘/總數</th>
            <th>百分比</th>
          </tr>
        </thead>
        <tbody>
          @foreach($stations as $key => $station)
          <?php
            $percentage = $ubikes[$key]['remainBikes'] / $station['totalBikes'] * 100;
            $percentage = number_format($percentage, 2);

          ?>

            <tr key="{{$key}}" name="{{ $station['stationName']}} " percentage="{{ $percentage }}">
              <td> {{ $key+1 }} </td>
              <td> {{ $station['stationArea'] }} </td>
              <td> {{ $station['stationName']}} </td>
              <td> {{ $ubikes[$key]['remainBikes']."/".$station['totalBikes']}} </td>
              <td> {{ $percentage . "%"}} </td>
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
