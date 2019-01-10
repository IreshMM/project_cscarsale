@extends('admin.layouts.adminapp') 

@section('content')
<div class="box-header">
    <div class="row">
        <div class="col-sm-8">
            <h3 class="box-title"> My Requests </h3>
        </div>
    </div>
    <div class="text-left">   
        <a class="btn btn-primary" href="{{ route('seller.form_add_request') }}">Make new request</a>
        <p></p>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Model</th>
                            <th>Description</th>
                            <th>Mileage</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($requests as $item)
                                <tr>
                                    <td>{{ $item->model->name }}</td>
                                    <td>{{ $item->seller_description }}</td>
                                    <td>{{ $item->mileage }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('seller.form_update_request', ['id_seller_request' => $item->id_seller_request]) }}">Update</a>
                                        <button data-item="{{ $item }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#view" onclick="fillModal(this);">
                                                View 
                                        </button>
                                        <button data-id="{{ $item->id_seller_request }}" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" onclick="fillSellerRequestId(this)">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Model</th>
                            <th>Description</th>
                            <th>Mileage</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
</div>


     <!-- Modal  for delete -->
    <div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel"></h4>
                  </div>
                     <form action="{{ route('seller_request.delete') }}" method="post">
                 {{-- {{method_field('delete')}}
                 {{csrf_field()}} --}}
              <div class="modal-body">
                     <p class="text-center">
                         Are you sure you want to delete this?
                     </p>
                     <input type="hidden" name="id_seller_request" id="id_seller_request" value="">
     
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                 <button type="submit" class="btn btn-warning">Yes, Delete</button>
             </div>
         </form>
             </div>
         </div>
     </div>
    
     <!-- Modal  view car details-->
<div id="view" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Car Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <div class="modal-body">
                            
            <form class="form-horizontal" id="request-form">
                <fieldset>
                    @php
                        $fieldSet = [
                            'model' => 'Model',
                            'buying_price' => 'Buying Price',
                            'mileage' => 'Mileage',
                            'color' => 'Color',
                            'year' => 'Year'
                        ];
                    @endphp
                        <!-- Text input-->
                    @foreach ($fieldSet as $key => $value)
                        <div class="form-group row">
                            <label for="seller" class=" col-sm-5 text-right control-label col-form-label">{{ $value }}</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="{{ $key }}" readonly>
                            </div>
                        </div>
                    @endforeach
                        
                    <div class="form-group row">
                        <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Description</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" readonly id="description"></textarea>
                        </div>
                    </div>
                    
                </fieldset>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="slide-container">
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
                </form>
            
            </div>
        </div>
    </div>
</div>
@endsection
  <!-- this page js -->
@section('image-script')
    <script src="/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="/assets/libs/magnific-popup/meg.init.js"></script>

    <script src="/assets/libs/toastr/build/toastr.min.js"></script>
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

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
            var data = JSON.parse($(e).attr("data-item"));
            console.log(data);
            $("#model").val(data.model.name);
            $("#buying_price").val(data.price);
            $("#color").val(data.color);
            $("#mileage").val(data.mileage);
            $("#year").val(data.year);
            $("#description").val(data.seller_description);

            var images = data.images;
            htmlString = "";
            var i = 0;
            images.forEach(element => {
                htmlString = htmlString
                                    + '<div class="carousel-item ' + (i == 0 ? 'active' : '') +'">'
                                    + '<img class="d-block w-100" src="' + element + '" alt="First slide">'
                                    + '</div>';
                i++;
            });

            // console.log(htmlString);
            $("#slide-container").html(htmlString);
            
            $("#id_seller_request").val(data.id_seller_request);
        }

        function fillSellerRequestId(e) {
            var id_seller_request = $(e).attr("data-id");
            $("#id_seller_request").val(id_seller_request);
        }
    </script>
@endsection