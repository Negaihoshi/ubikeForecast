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
            <th>name</th>
            <th>percentage</th>
          </tr>
        </thead>
        <tbody>
          @foreach($stationList as $key => $station)
            <tr key="{{$key}}" name="{{ $station['name']}} " percentage="{{$station['percentage']}}">
              <td> {{ $key }} </td>
              <td> {{ $station['name']}} </td>
              <td> {{ $station['percentage']}} </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@stop