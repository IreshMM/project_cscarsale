@extends('admin.layouts.adminapp') 
@section('content')
<div class="container-fluid">
            
        <div class="card ">
            <div class="card-header text-center card-header-primary">
                 <h4> New vehicle details</h4>
             </div>
                <form class="form-horizontal" action="{{ route('employee.update') }} " method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      
                        <div class="form-group row">
                            <label for="first_name" class="col-sm-3 text-right control-label col-form-label">First Name</label>
                            <div class=" col-sm-6">
                                    <input id="name" name="first_name" type="text" class="required form-control" value="{{ $user->first_name }}">
                             </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-sm-3 text-right control-label col-form-label">Last name</label>
                            <div class=" col-sm-6">
                                <input id="surname" name="last_name" type="text" class="required form-control" value="{{ $user->last_name }}">
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 text-right control-label col-form-label">Street Address</label>
                            <div class=" col-sm-6">
                                    <input id="address" name="street_address" type="text" class="form-control" value="{{ $user->street_address }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-sm-3 text-right control-label col-form-label">city</label>
                            <div class=" col-sm-6">
                                    <input id="city" name="city" type="text" class="form-control" value="{{ $user->city }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line3" class="col-sm-3 text-right control-label col-form-label">Year</label>
                            <div class=" col-sm-6">
                                    <input type="text" class="form-control" id="datepicker-autoclose" name ="dob" placeholder="YYYY-MM-DD" value="{{ $employee->dob }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="model" class="col-sm-3 text-right control-label col-form-label">District</label>
                            <div class=" col-sm-6">
                                    <input type="text" class="form-control" id="datepicker-autoclose" name ="dob" placeholder="YYYY-MMM-DD" value="{{ $employee->dob }}">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender">
                                            <option>Select</option>
                                            <option value="m" selected disabled>{{ $employee->gender }}</option>
                                           
                                        </select>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">NIC</label>
                                <div class=" col-sm-6">
                                        <input id="nic" name="nic" type="text" class="form-control" value="{{ $employee->nic }}">
                                </div>
                        </div>
                        <input name="id" value="{{ $employee->id }}" id="id" hidden>

                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                <div class=" col-sm-6">
                                   <input id="email" name="email" type="text" class="required form-control" value="{{ $user->email }}">

                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
                                <div class=" col-sm-6">
                                     <input id="mobile" name="phone" type="text" class="required form-control" value="{{ $user->phone }}">
 
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Landline</label>
                                <div class=" col-sm-6">
                                        <input id="mobile" name="land_line" type="text" class=" form-control" value="{{ $employee->land_line }}">

                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Bank account</label>
                                <div class=" col-sm-6">
                                        <input id="bank_account_no" name="bank_account" type="text" class="required form-control" value="{{ $employee->bank_account }}">

                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Bank Branch</label>
                                <div class=" col-sm-6">
                                        <input id="bank_account_no" name="bank_account" type="text" class="required form-control" value="{{ $employee->bank_account }}">

                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Position</label>
                                <div class=" col-sm-6">
                                        <input id="position" name="position" type="text" class="required form-control" value="{{ $employee->position }}">

                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="line3" class="col-sm-3 text-right control-label col-form-label">Hired Date</label>
                                <div class=" col-sm-6">
                                        <input type="text" class="form-control" id="datepicker-autoclose"name ="hired_date" placeholder="mm/dd/yyyy" value="{{ $employee->hired_date }}">

                                </div>
                        </div>
                        
                        
                    </div>
                    
                    <div class="border-top">
                            <div class="card-body text-center">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                </form>
    
        </div>
    </div>


            
    
               
          
        <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="/dist/js/custom.min.js"></script>
        <!-- this page js -->
        <script src="/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
        <script src="/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
       
       
@endsection