@extends('master')

@section('content')
  <div id="show" class="panel panel-default sun">
    <div class="pannel-body">
      <div id="img">
        <img width="200px" hieght="200px" src="/img/sm_sun.png" >
      </div>
      <div id="word">
        <div id="station">捷運港乾站</div>
        <div id="percentage">75 %</div>
      </div>
      <div class="clear"></div>
    </div>
    <div>
      <table class="table table-striped table-hover">
        <tr>
          <th>tt</th>
          <th>kk</th>
          <th>dd</th>
        </tr>
        @foreach($stationList as $key => $station)
          <tr key="{{$key}}" name="tt" percentage="{{$key}}">
            <td> {{ $station['tt']}} </td>
            <td> {{ $station['kk']}} </td>
            <td> {{ $station['dd']}} </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>

@stop