@extends('layouts.adminapp')





@section('content')
  @include('Reports/tablesProfit')
  <br><br><br>
  <!-- @include('Reports/charttype') -->
  @include('Reports/chartpie')
  @include('Reports/tablesSales')
@endsection
