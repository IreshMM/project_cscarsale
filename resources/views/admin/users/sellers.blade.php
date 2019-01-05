@extends('admin.layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> sellers Details </h3>
            </div>
        </div>
          
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cars Sold</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sellers as $item)
                        <tr>
                            <td>{{ $item->first_name . $item->last_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->sold_cars_count }}</td>
                            <td>{{ $item->city }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>
                                <button data-item="{{ $item }}" type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1" onclick="fillModel(this);">
                                        View 
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Cars Sold</th>
                        <th>City</th>
                        <th>Phone</th>
                        <th>Action</th>  
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Modal View seller Detail -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Sold  car details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal">
                                <fieldset>
                                    @php
                                        $data = [
                                            'first_name' => 'First Name',
                                            'last_name' => 'Last Name',
                                            'city' => 'City',
                                            'phone' => 'Phone',
                                            'email' => 'Email',
                                            'sold_cars_count' => 'Cars Sold'
                                        ];
                                    @endphp

                                    @foreach ($data as $key => $value)
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">{{ $value }}</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"  readonly id="{{ $key }}">
                                            </div>
                                        </div>
                                    @endforeach
                                 <!-- Button -->
                                 <div class="form-group">
                                     <label class=" col-sm-3 text-right control-label col-form-label" for="submit_form"></label>
                                     <div class="col-md-4">
                                         <button id="Ok" name="Ok" class="btn btn-primary">OK</button>
                                     </div>
                                 </div>
                               </fieldset>
                            </form>
                        </div>
                     </div>
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
        function fillModel(e) {
            var data = JSON.parse($(e).attr("data-item"));

            var fieldset = [
                "first_name",
                "last_name",
                "city",
                "phone",
                "email",
                "sold_cars_count",
            ];

            fieldset.forEach(function(entry) {
                $("#" + entry).val(data[entry]);
            });
        }
    </script>
@endsection