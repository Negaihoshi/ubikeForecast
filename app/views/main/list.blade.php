@extends('master')

@section('content')

  This is list.
  <table>
    <tr>
      <th>tt</th>
      <th>kk</th>
      <th>dd</th>
    </tr>
    @foreach($stationList as $station)
      <tr>
        <td> {{ $station['tt']}} </td>
        <td> {{ $station['kk']}} </td>
        <td> {{ $station['dd']}} </td>
      </tr>
    @endforeach


  </table>

@stop