@extends('admin.layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> Sold Vehicles </h3>
            </div>
        </div>
          
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Email Of Buyer</th>
                        <th>Model</th>
                        <th>Time</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                
                    <tbody>
                        @foreach ($subscriptions as $subscription)
                            <tr>
                                <td>{{ $subscription->email }}</td>
                                <td>{{ $subscription->model->name }}</td>
                                <td>{{ $subscription->created_at }}</td>
                               
                                <td>
                                    <button data-id="{{ $subscription->id }}" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete" onclick="fillSubscriptionId(this)">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Email Of Buyer</th>
                        <th>Model</th>
                        <th>Time</th>
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
                        <form action="{{ route('subscription.delete') }}" method="post">
                    {{-- {{method_field('delete')}}
                    {{csrf_field()}} --}}
                <div class="modal-body">
                        <p class="text-center">
                            Are you sure you want to delete this?
                        </p>
                        <input type="hidden" name="id" id="subscription-id" value="">
        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                    <button type="submit" class="btn btn-warning">Yes, Delete</button>
                </div>
            </form>
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
        function fillSubscriptionId(e) {
            $("#subscription-id").val($(e).attr("data-id"));
        }
    </script>  
@endsection