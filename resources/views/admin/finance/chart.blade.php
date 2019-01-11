@extends('admin.layouts.adminapp')





@section('content')

  @include('admin/Reports/tablesProfit')
  <br><br><br>
  @include('admin/Reports/chartpie')
  @include('admin/Reports/tablesSales')


@endsection
