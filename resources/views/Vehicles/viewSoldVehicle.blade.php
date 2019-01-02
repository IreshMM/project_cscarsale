@extends('layouts.adminapp') 

@section('content')
<!--<div class="row">
    <div class="col-md-9">-->
        <div class="card">
                        
           <div class="card-body">
                        
                <form class="form-horizontal">
                   <fieldset>
                
                    <!-- Form Name -->
                    <legend>View Sold Details</legend>
                
                        <!-- Text input-->
                        <div class="form-group row">
                            <label for="model" class=" col-sm-3 text-right control-label col-form-label">Model</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="model" readonly >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="manufacture" class=" col-sm-3 text-right control-label col-form-label">Manufacture</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="manufacture"readonly >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class=" col-sm-3 text-right control-label col-form-label">Price</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="price" readonly >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mileage" class=" col-sm-3 text-right control-label col-form-label">Mileage</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="mileage" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line2" class=" col-sm-3 text-right control-label col-form-label">color</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="line2" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line3" class=" col-sm-3 text-right control-label col-form-label">year</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="line3" readonly>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class=" col-sm-6">
                                <textarea class="form-control" readonly></textarea>
                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers Title</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"    id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers first Name</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  readonly id="line3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers last Name</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  id="line3" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Street Address</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"   id="line3" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">City</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"  id="line3" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"   id="line3" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Phone</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control"   id="line3" readonly>
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


    