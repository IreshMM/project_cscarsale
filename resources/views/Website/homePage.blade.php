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
        <br>
        <a href="#" class="btn btn-primary">Add</a>
    </div>
</div>


<div class="card">
        <div class="card-body">
          <h5 class="card-title">Featured</h5>       
              
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
              <br>
              <a href="#" class="btn btn-primary">Add</a>
          </div>
      </div>
      
      <div class="card">
            <div class="card-body">
                <h5 class="card-title">Best Offers</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Vehicle</th>
                                <th>Model</th>
                                <th>Manufacture</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>
                                                
                                               
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                        View 
                                                </button>
                                                <a class="btn btn-danger btn-sm" href="/sell">Delete</a>  
                                              
                                            </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>
                                   
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                        View 
                                                </button>
                                                <a class="btn btn-danger btn-sm" href="/sell">Delete</a>  
                                              
                                            </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>
                                   
                                                <a class="btn btn-success btn-sm" href="/viewVehicle">View</a>
                                                <a class="btn btn-danger btn-sm" href="/sell">Delete</a>  l </button>
                                              
                                            </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>
                                   
                                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                        View 
                                                </button>
                                                <a class="btn btn-danger btn-sm" href="/sell">Delete</a>  
                                              
                                            </td>
                                    </tr>
                                    
                        </tbody>
                        <tfoot>
                               
                            </tr>
                        </tfoot>
                    </table>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>


                </div>
            </div>
        </div>         
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
            
    <div class="row">
       <div class="col-12">
        
                <h4 class="card-title">Edit Welcome note</h4>
                            <!-- Create the editor container -->
                <div id="editor" style="height: 300px;">
                   <p>Hello World!</p>
                   <p>Some initial <strong>bold</strong> text</p>
                   <p>
                   <br>
                  </p>
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
</div>
     



<!-- Modal  view  best offers car details-->
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
                                 <label for="manufacture" class=" col-sm-5 text-right control-label col-form-label">Manufacture</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control" id="manufacture" readonly >
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="price" class=" col-sm-5 text-right control-label col-form-label">Price</label>
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control" id="price" readonly >
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
                                     <textarea class="form-control" readonly></textarea>
                                 </div>
                             </div>
     
                        
                         <!-- Button -->
                         <div class="form-group">
                             <label class=" col-sm-5 text-right control-label col-form-label" for="ok"></label>
                             <div class="col-md-4">
                                 <button id="ok" name="ok" class="btn btn-primary">Ok</button>
                             </div>
                         </div>
                             
                       </fieldset>
                    </form>
                    
                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>-->
            </div>
        </div>
    </div>

<!-- Modal  for select best offer cars from  car list-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select best Offers</h5>
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
<!--*******-->
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
