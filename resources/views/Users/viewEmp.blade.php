@extends('layouts.adminapp') 

@section('content')
<!--<div class="row">
    <div class="col-md-9">-->
        <div class="card">
                        
           <div class="card-body">
                        
                <form class="form-horizontal">
                   <fieldset>
                
                    <!-- Form Name -->
                    <legend>View Employee Details</legend>
                
                        <!-- Text input-->
                        <div class="form-group row">
                            <label for="name" class=" col-sm-3 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" readonly >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class=" col-sm-3 text-right control-label col-form-label">Address</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="address"readonly >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dob" class=" col-sm-3 text-right control-label col-form-label">Date of birth</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="dob" readonly >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class=" col-sm-3 text-right control-label col-form-label">Gender</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="gender" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class=" col-sm-3 text-right control-label col-form-label">mobile</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="mobile" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class=" col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="email" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="account" class=" col-sm-3 text-right control-label col-form-label">Bank Account Number</label>
                                <div class=" col-sm-6">
                                    <input type="text" class="form-control"  id="account" readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="branch" class=" col-sm-3 text-right control-label col-form-label">Bank Branch</label>
                                <div class=" col-sm-6">
                                    <input type="text" class="form-control"   id="branch" readonly>
                                </div>
                        </div>
                       
                    

                    <div class="form-group row">
                        <label for="Position" class=" col-sm-3 text-right control-label col-form-label">Position</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"   readonly  id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hiredate" class=" col-sm-3 text-right control-label col-form-label">Hired Date</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  readonly id="hiredate">
                        </div>
                    </div>
                      

                        
                    <!-- Button -->
                    <div class="form-group">
                        <label class=" col-sm-3 text-right control-label col-form-label" for="submit_form"></label>
                        <div class="col-md-4">
                            <button id="Ok" name="Ok" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                        
                  </fieldset>
               </form>
           </div>
        </div>
   <!-- </div>
</div>-->

@endsection


    