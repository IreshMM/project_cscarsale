@extends('layouts.adminapp') 

@section('content')
<!--<div class="row">
    <div class="col-md-9">-->
        <div class="card">
                        
           <div class="card-body">
                        
                <form class="form-horizontal">
                   <fieldset>
                
                    <!-- Form Name -->
                    <legend>Sell a car</legend>
                
                        <!-- Text input-->
                        <div class="form-group row">
                            <label for="model" class=" col-sm-3 text-right control-label col-form-label">Model</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="model" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="manufacture" class=" col-sm-3 text-right control-label col-form-label">Manufacture</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="manufacture" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class=" col-sm-3 text-right control-label col-form-label">Price</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="price" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mileage" class=" col-sm-3 text-right control-label col-form-label">Mileage</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="mileage">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line2" class=" col-sm-3 text-right control-label col-form-label">color</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="line2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line3" class=" col-sm-3 text-right control-label col-form-label">year</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="line3">
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class=" col-sm-6">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers Title</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  placeholder="Title"  id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers first Name</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  placeholder="First Name" id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers last Name</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  placeholder="Last Name" id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Street Address</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  placeholder="Street Address" id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">City</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" placeholder="City"  id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" placeholder="Email"  id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Phone</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  placeholder="Phone" id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class=" col-sm-3 text-right control-label col-form-label">Date of sale</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  placeholder="date" id="line3">
                        </div>
                    </div>

                        
                    <!-- Button -->
                    <div class="form-group">
                        <label class=" col-sm-3 text-right control-label col-form-label" for="submit_form"></label>
                        <div class="col-md-4">
                            <button id="submit_form" name="submit_form" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>
                        
                  </fieldset>
               </form>
           </div>
        </div>
   <!-- </div>
</div>-->

@endsection


    