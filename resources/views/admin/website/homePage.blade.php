@extends('layouts.adminapp') 

@section('content')

<style>
.preview-images-zone {
    width: 100%;
    border: 1px solid #ddd;
    min-height: 180px;
    /* display: flex; */
    padding: 5px 5px 0px 5px;
    position: relative;
    overflow:auto;
}
.preview-images-zone > .preview-image:first-child {
    height: 185px;
    width: 185px;
    position: relative;
    margin-right: 5px;
}
.preview-images-zone > .preview-image {
    height: 90px;
    width: 90px;
    position: relative;
    margin-right: 5px;
    float: left;
    margin-bottom: 5px;
}
.preview-images-zone > .preview-image > .image-zone {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .image-zone > img {
    width: 100%;
    height: 100%;
}
.preview-images-zone > .preview-image > .tools-edit-image {
    position: absolute;
    z-index: 100;
    color: #fff;
    bottom: 0;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
    display: none;
}
.preview-images-zone > .preview-image > .image-cancel {
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
.preview-image:hover > .image-zone {
    cursor: move;
    opacity: .5;
}
.preview-image:hover > .tools-edit-image,
.preview-image:hover > .image-cancel {
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
           </div>
       </div> 
</div>       
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Slider Images</h5>       
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <div class="container">
            <fieldset class="form-group">
                <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
            </fieldset>
            <div class="preview-images-zone">
                <div class="preview-image preview-show-1">
                    <div class="image-cancel" data-no="1">x</div>
                    <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
                 </div>
                <div class="preview-image preview-show-2">
                    <div class="image-cancel" data-no="2">x</div>
                    <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
                 </div>
                <div class="preview-image preview-show-3">
                    <div class="image-cancel" data-no="3">x</div>
                    <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
                 </div>
            </div>
        </div>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <a href="#" class="btn btn-primary">Add</a>
    </div>
</div>

{{-- <!--Featured cars--> --}}
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
                            <td>{{ $item->model->name }}</td>
                            <td>{{ $item->year }}</td>
                            <td>{{ $item->color }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>{{ $item->mileage }}</td>
                            <td data-item="{{ $item }}">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#View2" onclick="fillModel(this)">View</button>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete</button> 
                            </td>
                         </tr>
                     @endforeach       
                 </tbody>
             </table>
            {{-- To add featured cars to the list modal button --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#featured" >Add</button>
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
                        @foreach ($featured as $item)
                            <tr>
                                <td>{{ $item->model->name }}</td>
                                <td>{{ $item->year }}</td>
                                <td>{{ $item->color }}</td>
                                <td>{{ $item->selling_price }}</td>
                                <td>{{ $item->mileage }}</td>
                                <td data-item="{{ $item }}">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#View2" onclick="fillModel(this)">View</button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete</button> 
                                </td>
                                </tr>
                         @endforeach       
                     </tbody>
             </table>
             {{-- modal button for add Best offers --}}
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#best">Add</button>
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
                                        <input type="text" class="form-control" id="welcomeTitle" >
                                    </div>
                         </div>
                        <h5 class="card-title">Welcome note</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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


<!-- Modal  for select best offer cars from  car list-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  id="best" aria-hidden="true">
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
<div class="modal fade" id="View1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Modal  for featured cars from  car list------------------------------>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  id="featured" aria-hidden="true">
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
            $("#model").val(data.model.name);
            $("#manufacturer").val(data.model.make.name);
            $("#price").val(data.selling_price);
            $("#mileage").val(data.mileage);
            $("#color").val(data.color);
            $("#year").val(data.year);
            $("#seller").val(data.seller.first_name + " " + data.seller.last_name);
            $("#description").val(data.seller_description);
        }
    </script>
@endsection    

<!--*******-------------------->
<script src="/assets/libs/quill/dist/quill.min.js"></script>
            <script>
                
               
                var quill = new Quill('#editor', {
                    theme: 'snow'
                });
            
</script>

<script>
$(document).ready(function() {
    document.getElementById('pro-image').addEventListener('change', readImage, false);
    
    $( ".preview-images-zone" ).sortable();
    
    $(document).on('click', '.image-cancel', function() {
        let no = $(this).data('no');
        $(".preview-image.preview-show-"+no).remove();
    });
});



var num = 4;
function readImage() {
    if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
            var file = files[i];
            if (!file.type.match('image')) continue;
            
            var picReader = new FileReader();
            
            picReader.addEventListener('load', function (event) {
                var picFile = event.target;
                var html =  '<div class="preview-image preview-show-' + num + '">' +
                            '<div class="image-cancel" data-no="' + num + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                output.append(html);
                num = num + 1;
            });

            picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
        console.log('Browser not support');
    }
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
