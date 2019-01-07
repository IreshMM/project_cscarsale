@extends('admin.layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> Sold Vehicle Details </h3>
            </div>
        </div>
          
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Buyer</th>
                        <th>Model</th>
                        <th>Manufacture</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($soldcars as $item)
                        <tr>
                            <td>{{ $item->buyer->first_name . $item->buyer->last_name }}</td>
                            <td>{{ $item->model->name }}</td>
                            <td>{{ $item->model->make->name }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>{{ $item->date }}</td>
                            <td>
                                <button data-item="{{ $item }}" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1" onclick="fillModal(this)">View</button>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Buyer</th>
                        <th>Model</th>
                        <th>Manufacture</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Modal  View Sold car details-->
<div class="modal fade bd-example-modal-lg" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
        <div class="modal-dialog" role="document ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Sold Vehicle Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true ">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal">
                                <fieldset>
                             
                        
                                     <!-- Text input-->
                                     <div class="form-group row">
                                         <label for="model" class=" col-sm-5 text-right control-label col-form-label">Model</label>
                                         <div class="col-sm-6">
                                             <input type="text" class="form-control" id="model" readonly >
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="manufacture" class=" col-sm-5 text-right control-label col-form-label">Manufacture</label>
                                         <div class=" col-sm-6">
                                             <input type="text" class="form-control" id="make"readonly >
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="price" class=" col-sm-5 text-right control-label col-form-label">Price</label>
                                         <div class=" col-sm-6">
                                             <input type="text" class="form-control" id="price" readonly >
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="mileage" class=" col-sm-5 text-right control-label col-form-label">Mileage</label>
                                         <div class=" col-sm-6">
                                             <input type="text" class="form-control" id="mileage" readonly>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="line2" class=" col-sm-5 text-right control-label col-form-label">Color</label>
                                         <div class=" col-sm-6">
                                             <input type="text" class="form-control" id="color" readonly>
                                         </div>
                                     </div>
                                     <div class="form-group row">
                                         <label for="line3" class=" col-sm-5 text-right control-label col-form-label">Year</label>
                                         <div class=" col-sm-6">
                                             <input type="text" class="form-control" id="year" readonly>
                                         </div>
                                     </div>
                                 
                                     <div class="form-group row">
                                         <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Description</label>
                                         <div class=" col-sm-6">
                                             <textarea class="form-control" readonly id="description"></textarea>
                                         </div>
                                     </div>
             
                                 <div class="form-group row">
                                     <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Buyers Title</label>
                                     <div class=" col-sm-6">
                                         <input type="text" class="form-control" readonly id="title">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Buyers first Name</label>
                                     <div class=" col-sm-6">
                                         <input type="text" class="form-control"  readonly id="first_name">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Buyers last Name</label>
                                     <div class=" col-sm-6">
                                         <input type="text" class="form-control"  id="last_name" readonly>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Street Address</label>
                                     <div class=" col-sm-6">
                                         <input type="text" class="form-control"   id="street_address" readonly>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">City</label>
                                     <div class=" col-sm-6">
                                         <input type="text" class="form-control"  id="city" readonly>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Email</label>
                                     <div class=" col-sm-6">
                                         <input type="text" class="form-control"   id="email" readonly>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Phone</label>
                                     <div class=" col-sm-6">
                                         <input type="text" class="form-control"   id="phone" readonly>
                                     </div>
                                 </div>
             
                                     
                                 <!-- Button -->
                                 {{-- <div class="form-group">
                                     <label class=" col-sm-3 text-right control-label col-form-label" for="submit_form"></label>
                                     <div class="col-md-4">
                                         <button id="Ok" name="Ok" class="btn btn-primary">OK</button>
                                     </div>
                                 </div> --}}
                                     
                               </fieldset>
                         </form>
                </div>
                {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> --}}
            </div>
        </div>
    </div>

@endsection

@section('table-script')        
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
            *       Basic Table                   *
            ****************************************/
        $('#zero_config').DataTable();
    </script>
@endsection

@section('post-script')
<script>
        function fillModal(e) {
            // console.log($(e).attr("data-item"));
            var data = JSON.parse($(e).attr("data-item"));
            console.log(data);
            $("#model").val(data.model.name);
            $("#make").val(data.model.make.name);
            $("#price").val(data.selling_price);
            $("#mileage").val(data.mileage);
            $("#color").val(data.color);
            $("#year").val(data.year);
            $("#description").val(data.seller_description);
            $("#title").val(data.buyer.title);
            $("#first_name").val(data.buyer.first_name);
            $("#last_name").val(data.buyer.last_name);
            $("#street_address").val(data.buyer.street_address);
            $("#city").val(data.buyer.city);
            $("#email").val(data.buyer.email);
            $("#phone").val(data.buyer.phone);
        }
    </script>
@endsection