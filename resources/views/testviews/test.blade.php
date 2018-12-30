@extends('layouts.adminapp') 

@section('content')
<div  class="quick-actions_homepage">
    <ul class="quick-actions">
      <li class="bg_lb"> <a href="/create"> <i class="icon-user"></i>Employees </a> </li>
      <li class="bg_lg"> <a href="#"> <i class="icon-shopping-cart"></i> Sold -cars</a> </li>
      <li class="bg_ly"> <a href="#"> <i class=" icon-globe"></i> Web Marketing </a> </li>
      <li class="bg_lo"> <a href="#"> <i class="icon-group"></i> Manage Users </a> </li>
      <li class="bg_ls"> <a href="#"> <i class="icon-signal"></i> Check Statistics</a> </li>
    </ul>
  </div>
    
@endsection