@extends('layouts.adminapp')





@section('content')



  @include('Reports/tableinvest')
  <br>
  @include('Reports/tablesold')
  <br>
  @include('Reports/charttype')

@endsection
