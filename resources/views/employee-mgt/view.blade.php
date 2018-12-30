@extends('layouts.adminapp') 

@section('content')

           
<div class="container-fluid">
               
        <div class="card">
            <div class="card-body wizard-content">
                <h4 class="card-title">Employee Details</h4>
                <h6 class="card-subtitle"></h6>
                <form id="example-form"  class="m-t-40">
                      <div>
                        @foreach($employee as $emp)  
                        <h3>Profile</h3>
                        <section>
                            <label for="name">First name *</label>
                            <input id="name" name="name" type="text" class="required form-control">
                            <label for="surname">Last name *</label>
                            <input id="surname" name="surname" type="text" class="required form-control">
                           
                            <label for="address">Address</label>
                            <input id="address" name="address" type="text" class="form-control">
                            <label for="dob">Date of Birth</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="datepicker-autoclose" name ="dob" placeholder="mm/dd/yyyy">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <label for="address">Gender</label>
                            <div class="col-md-9">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender">
                                    <option>Select</option>
                                    
                                        <option value="f">Female</option>
                                        <option value="m">Male</option>
                                   
                                    
                                </select>
                            </div>
                            <label for="address">NIC</label>
                            <input id="nic" name="nic" type="text" class=" form-control">
                            <p>(*) Mandatory</p>
                        </section>
                       
                        
                        <h3>Contact Details</h3>
                            <section>
                                <label for="email">Email *</label>
                                <input id="email" name="email" type="text" class="required form-control">
                                <label for="mobile">Mobile *</label>
                                <input id="mobile" name="mobile" type="text" class="required form-control">
                                <label for="landline">Land line *</label>
                                <input id="mobile" name="landline" type="text" class=" form-control">
                                <p>(*) Mandatory</p>
                            
                            <h3>Bank details</h3>
                           
                                <label for="bank account">Bank Account no *</label>
                                <input id="bank_account_no" name="bank_account" type="text" class="required form-control">
                                <label for="branch">Bank branch *</label>
                                <input id="branch" name="branch" type="text" class="required form-control">
                                
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Position</h3>
                            <section>
                                <label for="position">Position *</label>
                                <input id="position" name="position" type="text" class="required form-control">
                                <label for="hire date">Hired date</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="datepicker-autoclose"name ="hire_date" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Account</h3>
                            <section>
                                <label for="userName">User name *</label>
                                <input id="userName" name="userName" type="text" class="required form-control">
                                <label for="password">Password *</label>
                                <input id="password" name="password" type="text" class="required form-control">
                                <label for="confirm">Confirm Password *</label>
                                <input id="confirm" name="confirm" type="text" class="required form-control">
                                <p>(*) Mandatory</p>
                            </section>
                    </div>
                    
                    @endforeach   
                    
                </form>
            </div>
        </div>
        
    </div>
    <script src="../../assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="../../assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../../assets/libs/quill/dist/quill.min.js"></script>

@endsection