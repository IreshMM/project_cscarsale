@extends('admin.layouts.adminapp')

@section('custom-css')
<link rel="stylesheet" type="text/css" href="/assets/libs/select2/dist/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="/assets/libs/jquery-minicolors/jquery.minicolors.css">
<link rel="stylesheet" type="text/css" href="/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="/assets/libs/quill/dist/quill.snow.css">
<link href="/dist/css/style.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="box-header">
    <div class="row">
        <div class="col-sm-8">
            <h3 class="box-title"> Testimonials </h3>
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
                        <th>Buyer Name</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->buyer->last_name }}</td>
                            <td>{{ $testimonial->title }}</td>
                            <td>{{ $testimonial->description }}</td>
                            <td>{{ $testimonial->created_at }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('employee.update', ['id' => $testimonial->id]) }}">Edit</a>
                                <button data-item="{{ $testimonial }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1" onclick="fillModal(this)">View</button>
                                <button data-id="{{ $testimonial->id }}" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" onclick="fillTestimonialId(this)">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


 <!-- Modal  View  Employee-->
 <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
    <div class="modal-dialog" role="document ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Employee Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true ">&times;</span>
                </button>
            </div>
            <div class="modal-body">  
                <form class="form-horizontal">
                    @php
                        $fieldSet = [
                            'title' => 'Title',
                            'description' => 'Message',
                            'buyer_name' => 'Buyer Name',
                            'seller_name' => 'Seller Name'
                        ];
                    @endphp
                    <fieldset>
                        <div class="form-group row">
                            <label for="name" class=" col-sm-5 text-right control-label col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" readonly >
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
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
            <form action="{{ route('employee.delete') }}" method="post">
                <input type="hidden" name="id" id="testimonial-id" value="">
            </form>
            <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                <button type="submit" class="btn btn-warning">Yes, Delete</button>
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
@endsection

@section('post-script')
    <script>
        function fillTestimonialId(e) {
            $("testimonial-id").val($(e).attr("data-id"));
        }

        function fillModal(e) {
            var data = JSON.parse($(e).attr("data-item"));

        }
    </script>


@endsection