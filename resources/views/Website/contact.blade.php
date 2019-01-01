@extends('layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> Details Of CONTACT US Page </h3>
            </div>
        </div>
          
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table  class="table table-striped table-bordered">
                <thead>
                    <tr>
                       
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Facebook</th>
                        <th>Address<th>
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
                           
                                        <button type="button" class="btn btn-primary btn-sm"> Add </button>
                                      
                                    </td>
                            </tr>
                           
                   
                  
                </tbody>
                
            </table>
        </div>
    </div>
</div>
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
