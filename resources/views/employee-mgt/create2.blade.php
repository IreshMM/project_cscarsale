@extends('layouts.adminapp') 

@section('content')


  
<div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Add Employee</h5>
        </div>
        <div class="widget-content nopadding">
           
          <form action="#" method="get" class="form-horizontal">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-mgt.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="First name" name="fist_name"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Last name" name="last_name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password input</label>
              <div class="controls">
                <input type="password"  class="span11" placeholder="Enter Password" name="password"  />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Position :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Position" name="position" />
              </div>
            </div>
          <!--  <div class="control-group">
                <label class="control-label">Gender</label>
                <div class="controls">
                  <label>
                    <input type="checkbox" name="male" />
                    Male</label>
                  <label>
                    <input type="checkbox" name="female" />
                    Female</label>
                
                </div>
              </div>-->
             
                 <div class="form-group row">
                  <label class="control-label">Radio Buttons</label>
                      <div class="col-md-9">
                      <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation1">Male</label>
                      </div>
                       <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                          <label class="custom-control-label" for="customControlValidation2">Female</label>
                       </div>
                  </div>
              </div>
           
            <div class="control-group">
                <label class="control-label">Mobile :</label>
                <div class="controls">
                  <input type="text" class="span11" placeholder="Position" name="mobile" />
                </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Email :</label>
                  <div class="controls">
                    <input type="text" class="span11" placeholder="email" name="email" />
                  </div>
              </div>
            
            <div class="control-group">
              <label class="control-label">Address</label>
              <div class="controls">
                <textarea class="span11" ></textarea>
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
       
        </div>
      </div>
    </div>
  </div>
 
  <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="lname" placeholder="Password Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Company</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email1" placeholder="Company Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Contact No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="Contact No Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>-->
@endsection