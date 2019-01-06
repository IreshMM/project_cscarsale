@extends('admin.layouts.adminapp') 

@section('content')


{{-- Adding images to slider --}}
@section('custom-script')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">

              <h4 class="box-title"> Details Of HOME Page </h4>
                
              <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file1" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file2" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file3" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="file4" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                   </div>
                 </div>
             </div>
       </div> 
</div>
   


{{--Featured cars---}}
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Featured Vehicles</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Price</th>
                        <th>Mileage</th>
                        <th>Action</th>
                     </tr>
                 </thead>
                <tbody>
                    @foreach ($featured as $item)
                        <tr>
                            <td>{{ $item->carListing->model->name }}</td>
                            <td>{{ $item->carListing->year }}</td>
                            <td>{{ $item->carListing->color }}</td>
                            <td>{{ $item->carListing->selling_price }}</td>
                            <td>{{ $item->carListing->mileage }}</td>
                            <td data-item="{{ $item }}">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#View-featured" onclick="fillModel(this)">View</button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete</button> 
                            </td>
                         </tr>
                     @endforeach       
                 </tbody>
             </table>
            {{-- To add featured cars to the list modal button --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-featured" >Add</button>
         </div>
    </div>
</div> 

{{--Best Offers--}}
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Best Offers</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                            <tr>
                                <th>Model</th>
                                <th>Year</th>
                                <th>Color</th>
                                <th>Price</th>
                                <th>Mileage</th>
                                <th>Action</th>
                             </tr>
                     </thead>
                    <tbody>
                        @foreach ($bestoffers as $item)
                            <tr>
                                <td>{{ $item->carListing->model->name }}</td>
                                <td>{{ $item->carListing->year }}</td>
                                <td>{{ $item->carListing->color }}</td>
                                <td>{{ $item->carListing->selling_price }}</td>
                                <td>{{ $item->carListing->mileage }}</td>
                                <td data-item="{{ $item }}">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#View-best" onclick="fillModel(this)">View</button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete</button> 
                                </td>
                                </tr>
                         @endforeach       
                     </tbody>
             </table>
             {{-- modal button for add Best offers --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-best">Add</button>
         </div>
     </div>
 </div> 

{{-- Welcome title and note---}}
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group row">
                                <label for="title" class="col-sm-3 text-right control-label col-form-label">Welcome Title</label>
                                    <div class=" col-sm-6">
                                        <input type="text" class="form-control" id="welcomeTitle" value="{{ $title }}">
                                    </div>
                         </div>
                        <h5 class="card-title">Welcome note</h5>
                        <p>{{ $welcome }}</p>
                     </div>
                 </div>
             </div>
         </div>                  
     {{---Editor--}}
        <div class="row">
            <div class="col-12">
                <h4 class="card-title">Edit Welcome note</h4>
                            <!-- Create the editor container -->
                    <div id="editor" style="height: 300px;">
                        <p>Hello World!</p>
                        <p>Some initial <strong>bold</strong> text</p>
                        <p><br></p>
                     </div>
             </div>
         </div> 
     </div>
    <div class="form-group">
        <label class=" col-sm-3 text-right control-label col-form-label" for="ok"></label>
            <div class="col-md-4">
                <button id="ok" name="ok" class="btn btn-primary">Ok</button>
            </div>
     </div>
 </div> {{-- end of Welcome note --}}
     
{{--Modal  view  best offers car details --}}
<div class="modal fade" id="View-best" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                $attributes = ['model', 'manufacturer', 'price', 'mileage', 'color', 'year', 'seller'];
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
                        <div class="carousel-inner">
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

                    {{-- 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    --}}
                </div>
        </div>
    </div>


{{--Modal  for select best offer cars from  car list--}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  id="add-best" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Select best Offers</h5>
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


{{---- Modal  view  featured car details---------------------------------------------------- --}}
<div class="modal fade" id="View-featured" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            @php
                                $attributes = ['model', 'manufacturer', 'price', 'mileage', 'color', 'year', 'seller'];
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
                          
                            {{-- View images --}}
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
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
                           {{---- Button -- --}}
                            <div class="form-group">
                                <label class=" col-sm-5 text-right control-label col-form-label" for="ok"></label>
                                <div class="col-md-4">
                                    <button id="ok" name="ok" class="btn btn-primary">Ok</button>
                                </div>
                            </div>
                           
                          </fieldset>
                     </form>
             </div>
         </div>
     </div>
 </div>

{{--Modal  for featured cars from  car list--}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  id="add-featured" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Featured cars</h5>
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

{{--  Modal  for delete fetured--}}
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
             <div class="modal-content">
                   <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-center" id="myModalLabel"></h4>
                     </div>
                    <form action=" " method="post">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                            <div class="modal-body">
                                <p class="text-center">
                                    Are you sure you want to delete this?
                                </p>
                                <input type="hidden" name="category_id" id="cat_id" value="">
                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                                <button type="submit" class="btn btn-warning">Yes, Delete</button>
                            </div>
                     </form>
                 </div>
         </div>
 </div> {{-- finish delete modal --}}
     
 @section('post-script')
 <script>
     function fillModel(e) {
         var data = JSON.parse($(e).parent().attr("data-item"));
         console.log(data);
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
                                 + '<img class="d-block w-100" src="storage/images/car_listing/468X280/' 
                                 + id_car_listing + (i + 1) + '" alt="First slide"></div>';
         }
         console.log(htmlString);
     }
 </script>


<!--*******-------------------->
    <script src="/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        var quill = new Quill('#editor', {
                        theme: 'snow'
                    });

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