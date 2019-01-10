@extends('admin.layouts.adminapp')





@section('content')

  @include('Reports/tablesProfit')
  <br><br><br>
  @include('Reports/chartpie')
  @include('Reports/tablesSales')


@endsection
