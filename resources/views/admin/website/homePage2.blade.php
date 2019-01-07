@extends('admin.layouts.adminapp') 
@section('content')

<style>
    .preview-images-zone {
        width: 100%;
        border: 1px solid #ddd;
        min-height: 180px;
        /* display: flex; */
        padding: 5px 5px 0px 5px;
        position: relative;
        overflow: auto;
    }

    .preview-images-zone>.preview-image:first-child {
        height: 185px;
        width: 185px;
        position: relative;
        margin-right: 5px;
    }

    .preview-images-zone>.preview-image {
        height: 90px;
        width: 90px;
        position: relative;
        margin-right: 5px;
        float: left;
        margin-bottom: 5px;
    }

    .preview-images-zone>.preview-image>.image-zone {
        width: 100%;
        height: 100%;
    }

    .preview-images-zone>.preview-image>.image-zone>img {
        width: 100%;
        height: 100%;
    }

    .preview-images-zone>.preview-image>.tools-edit-image {
        position: absolute;
        z-index: 100;
        color: #fff;
        bottom: 0;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
        display: none;
    }

    .preview-images-zone>.preview-image>.image-cancel {
        font-size: 18px;
        position: absolute;
        top: 0;
        right: 0;
        font-weight: bold;
        margin-right: 10px;
        cursor: pointer;
        display: none;
        z-index: 100;
    }

    .preview-image:hover>.image-zone {
        cursor: move;
        opacity: .5;
    }

    .preview-image:hover>.tools-edit-image,
    .preview-image:hover>.image-cancel {
        display: block;
    }

    .ui-sortable-helper {
        width: 90px !important;
        height: 90px !important;
    }

    .container {
        padding-top: 50px;
    }
</style>


@section('custom-script')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection



<div class="box-header">
    <div class="row">
        <div class="col-sm-8">
            <h4 class="box-title"> Update website homepage </h4>
        </div>
    </div>
</div>



{{-- File upload --}}
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Slider Images</h5>

        {{-- File upload 1 --}}
        <div class="form-group row">
            <label class="col-md-3">File Upload</label>
            <div class="col-md-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>

        {{-- File upload 2 --}}
        <div class="form-group row">
            <label class="col-md-3">File Upload</label>
            <div class="col-md-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>

        {{-- File upload 3 --}}
        <div class="form-group row">
            <label class="col-md-3">File Upload</label>
            <div class="col-md-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>

        {{-- File upload 4 --}}
        <div class="form-group row">
            <label class="col-md-3">File Upload</label>
            <div class="col-md-9">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>
            </div>
        </div>

    </div>
    <div class="border-top">
        <div class="card-body">
            <button type="button" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>



<!--Featured cars-->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Featured Vehicles</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Manufacturer</th>
                        <th>Price</th>
                        <th>Mileage</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($featured as $item)
                        <tr>
                            <td>{{ $item->carListing->model->name }}</td>
                            <td>{{ $item->carListing->model->make->name }}</td>
                            <td>{{ $item->carListing->selling_price }}</td>
                            <td>{{ $item->carListing->mileage }}</td>
                            <td>{{ $item->carListing->year }}</td>
                        
                            <td>
                                <button data-item="{{ $item }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1" onclick="fillModel(this)">
                                            View 
                                    </button>
                                <button data-id="{{ $item->id_car_listing }}" data-t="f" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" onclick="fillModalId(this)">Delete</button>  

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#featured">Add</button>
        </div>
    </div>
</div>


<!--Best Offers--->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Best Offers</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Manufacturer</th>
                        <th>Price</th>
                        <th>Mileage</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bestoffers as $item)
                        <tr>
                            <td>{{ $item->carListing->model->name }}</td>
                            <td>{{ $item->carListing->model->make->name }}</td>
                            <td>{{ $item->carListing->selling_price }}</td>
                            <td>{{ $item->carListing->mileage }}</td>
                            <td>{{ $item->carListing->year }}</td>
                        
                            <td>
                                <button data-item="{{ $item }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1" onclick="fillModel(this)">
                                            View 
                                    </button>
                                <button data-id="{{ $item->id_car_listing }}" data-t="b" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" onclick="fillModalId(this)">Delete</button>  

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#best">Add</button>
        </div>
    </div>
</div>


<!--Welcome title and note-->
<div class="card">
    <div class="card-body">
        <form action="{{ route('website_content.set_welcome') }}" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="title" class="col-sm-3 text-right control-label col-form-label">Welcome Title</label>
                                <div class=" col-sm-6">
                                    <input type="text" class="form-control" id="welcomeTitle" name="welcome_note_title">
                                </div>
                            </div>
                            <h5 class="card-title">Welcome note</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--Editor--->
            <div class="row">
                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                <div class="col-12">
                    <textarea class="form-control" name="welcome_note"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class=" col-sm-3 text-left control-label col-form-label" for="ok"></label>
                <div class="col-md-4">
                    <button id="save" name="save" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

    </div>
    
</div>


<!-- Modal  view car details---->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Car Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <fieldset>
                        <!-- Text input-->
                        <div class="form-group row">
                            <label for="model" class=" col-sm-5 text-right control-label col-form-label">Model</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="model" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="manufacture" class=" col-sm-5 text-right control-label col-form-label">Manufacturer</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="manufacturer" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class=" col-sm-5 text-right control-label col-form-label">Price</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="price" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mileage" class=" col-sm-5 text-right control-label col-form-label">Mileage</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="mileage" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="color" class=" col-sm-5 text-right control-label col-form-label">color</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="color" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="year" class=" col-sm-5 text-right control-label col-form-label">year</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="year" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="seller" class=" col-sm-5 text-right control-label col-form-label">Seller</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="seller" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="description" readonly></textarea>
                            </div>
                        </div>


                        {{-- <!-- Button -->
                        <div class="form-group">
                            <label class=" col-sm-5 text-right control-label col-form-label" for="ok"></label>
                            <div class="col-md-4">
                                <button id="ok" name="ok" class="btn btn-primary">Ok</button>
                            </div>
                        </div> --}}
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal  for select best offer cars from  car list-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="best" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select best Offers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <div class="card">
                    <div class="card-body">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Model</th>
                                <th scope="col">Manufacture</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add">
                                                        <i class="mdi mdi-check"></i>
                                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        </i><i class="mdi mdi-close"></i>
                                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add">
                                                        <i class="mdi mdi-check"></i>
                                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        </i><i class="mdi mdi-close"></i>
                                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add">
                                                        <i class="mdi mdi-check"></i>
                                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        </i><i class="mdi mdi-close"></i>
                                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal  for featured cars from  car list------>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="featured"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Featured cars</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card">
                    <div class="card-body">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Model</th>
                                <th scope="col">Manufacture</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add">
                                                    <i class="mdi mdi-check"></i>
                                                </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    </i><i class="mdi mdi-close"></i>
                                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add">
                                                    <i class="mdi mdi-check"></i>
                                                </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    </i><i class="mdi mdi-close"></i>
                                                </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add">
                                                    <i class="mdi mdi-check"></i>
                                                </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                    </i><i class="mdi mdi-close"></i>
                                                </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


{{-- Delete confirmation modal --}}
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title text-center" id="myModalLabel"></h4>
        </div>
        <form method="post" id="delete-modal-form">
                {{csrf_field()}}
            <div class="modal-body">
                    <p class="text-center">
                        Are you sure you want to delete this?
                    </p>
                    <input name="id_car_listing" type="hidden" name="category_id" id="id_car_listing" value="">
    
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                <button type="submit" class="btn btn-warning">Yes, Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>


<!--*******-------------------->
<script src="/assets/libs/quill/dist/quill.min.js"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    $("#save").click(function() {
        var delta = quill.getcontents();
        console.log(delta);
    });


    function fillModel(e) {
        var data = JSON.parse($(e).attr("data-item"));
        console.log(data);
        $("#model").val(data.car_listing.model.name);
        $("#manufacturer").val(data.car_listing.model.make.name);
        $("#price").val(data.car_listing.selling_price);
        $("#mileage").val(data.car_listing.mileage);
        $("#color").val(data.car_listing.color);
        $("#year").val(data.car_listing.year);
        $("#seller").val(data.car_listing.seller.first_name + " " + data.car_listing.seller.last_name);
        $("#description").val(data.car_listing.seller_description);
    }

</script>

<!-- this page js -->
<script src="/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
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
        function fillModalId(e) {
            $("#id_car_listing").val($(e).attr("data-id"));

            if($(e).attr("data-t") == "b") {
                $("#delete-modal-form").attr("action", "{{ route('best_offer.delete') }}");
            } else {
                $("#delete-modal-form").attr("action", "{{ route('featured_listing.delete') }}");
            }

            $("#delete-modal-form").attr("method", "POST");

        }
    </script>
@endsection