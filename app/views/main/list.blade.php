@extends('master')

@section('content')
  <div id="show" class="panel panel-default">
    <div class="pannel-body">
      <div id="img">
        <img src="http://earthpeace.img.jugem.jp/20121024_160641.png" >
      </div>
      <div id="word">
        <div id="station">捷運港乾站</div>
        <div id="percentage">75 %</div>
      </div>
    </div>
  </div>
  <table class="table table-striped">
    <tr>
      <th>tt</th>
      <th>kk</th>
      <th>dd</th>
    </tr>
    @foreach($stationList as $key => $station)
      <tr key="{{$key}}" name="tt">
        <td> {{ $station['tt']}} </td>
        <td> {{ $station['kk']}} </td>
        <td> {{ $station['dd']}} </td>
      </tr>
    @endforeach


  </table>

@stop