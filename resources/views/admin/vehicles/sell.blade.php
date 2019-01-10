@extends('admin.layouts.adminapp') 

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header text-center card-header-primary ">
                <h3>Sell Vehicle </h3>
            </div>           
             <div class="card-body">
                        
                 <form class="form-horizontal" method="POST" action="{{ route('car_listing.sell') }}">
                   <fieldset>
                
                        <!-- Text input-->
                        <div class="form-group row">
                            <label for="model" class=" col-sm-3 text-right control-label col-form-label">Model</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="model" value="{{ $car->model->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="manufacture" class=" col-sm-3 text-right control-label col-form-label">Manufacture</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="manufacture" value="{{ $car->model->make->name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class=" col-sm-3 text-right control-label col-form-label">Price</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" name="selling_price" id="price" value="{{ $car->selling_price }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mileage" class=" col-sm-3 text-right control-label col-form-label">Mileage</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="mileage" value="{{ $car->mileage }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line2" class=" col-sm-3 text-right control-label col-form-label">Color</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="color" value="{{ $car->color }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line3" class=" col-sm-3 text-right control-label col-form-label">Year</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="year" value="{{ $car->year }}" readonly>
                            </div>
                        </div>
                    
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class=" col-sm-6">
                                <textarea class="form-control" readonly>{{ $car->seller_description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="model" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class=" col-sm-6">
                                <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="title">
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Mrs">Miss</option>
                                </select>
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers first Name</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control"  placeholder="First Name" name="first_name" id="first_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Buyers last Name</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control"  placeholder="Last Name" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Street Address</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control"  placeholder="Street Address" id="street_address" name="street_address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">City</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" placeholder="City"  id="city" name="city">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" placeholder="Email"  id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-3 text-right control-label col-form-label">Phone</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control"  placeholder="Phone" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class=" col-sm-3 text-right control-label col-form-label">Date of sale</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control"  placeholder="YYYY-MM-DD" id="date" name="date">
                            </div>
                        </div>

                        
                        <!-- Button -->
                        <div class="form-group">
                            <label class=" col-sm-3 text-right control-label col-form-label" for="submit_form"></label>
                            <div class="col-md-4">
                                <button type="submit" value="{{ $car->id_car_listing }}" id="submit_form" name="submit_form" class="btn btn-primary">Submit Form</button>
                            </div>
                        </div>
                        
                  </fieldset>
               </form>
             </div>
     </div>
 </div>
  

@endsection


    