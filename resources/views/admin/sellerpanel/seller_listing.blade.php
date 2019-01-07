@extends('admin.layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
                <h3 class="box-title">Cars Listed</h3>
            </div>
        </div>
           
 </div>

<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>mileage</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{-- @foreach ($cars as $item) 
                    <tr>
                        {{-- <td>{{ $item->model->name }}</td>
                        <td>{{ $item->year }}</td>
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->selling_price }}</td>
                         <td>{{ $item->mileage }}</td> --  data-item="{{ $item }}" 
                        <td  > 
                        
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#view-modal" onclick="fillModel(this)">View</button> 
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Modal2">
                                    Delete
                            </button>         
                        </td>
                    </tr>
                     @endforeach  --}}
                    <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#view-modal" onclick="fillModel(this)">View</button> 
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#Modal2">
                                        Delete
                                </button>     </td>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Mileage</th>
                        <th>status</th>
                        <th>Action</th>  
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
{{-- Modal  view car details --}}
<div class="modal fade" id="view-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Car Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                        
                <form class="form-horizontal center">
                    <fieldset>
                        <!-- Text input-->
                        @php
                            $attributes = ['model', 'manufacturer', 'price', 'mileage', 'color', 'year','status'];
                        @endphp
                        @foreach ($attributes as $item)
                        <div class="form-group row">
                        <label for="{{ $item }}" class="col-sm-4 text-right control-label col-form-label">{{ ucfirst($item) }}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="{{ $item }}" readonly>
                            </div>
                        </div>
                        @endforeach

                        <div class="form-group row">
                            <label for="cono1" class="col-sm-4 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-7">
                                <textarea style="height:100px;" id="description" class="form-control" readonly></textarea>
                            </div>
                        </div>
                            
                    </fieldset>
                </form>
                
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="slide-container">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="/images/img1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/images/img2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="/images/img3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

               
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
    <script src="/assets/libs/toastr/build/toastr.min.js"></script>
@endsection

@section('post-script')
    <script>
        function fillModel(e) {
            var data = JSON.parse($(e).parent().attr("data-item"));
            $("#model").val(data.model.name);
            $("#manufacturer").val(data.model.make.name);
            $("#price").val(data.selling_price);
            $("#mileage").val(data.mileage);
            $("#color").val(data.color);
            $("#year").val(data.year);
            $("#seller").val(data.seller.first_name + " " + data.seller.last_name);
            $("#description").val(data.seller_description);

            var id_car_listing = data.id_car_listing;
            var no_of_images = data.images;
            
            var htmlString = "";
            for(var i = 0; i < no_of_images; i++) {
                htmlString = htmlString
                                    + '<div class="carousel-item ' + (i == 0 ? 'active' : '') + '">'
                                    + '<img class="d-block w-100" src="/storage/images/car_listing/468X280/' 
                                    + id_car_listing + (i + 1) + '.jpg' + '" alt="First slide"></div>';
            }

            $("#slide-container").html(htmlString);
        }
    </script>
@endsection