@extends('admin.layouts.adminapp') 

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
                            <th>Name</th>
                            <th>User name</th>
                            <th>Message</th>
                            <th>Image</th>
                            <th>Date</th>
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
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm"> Add </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm"> Add </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm"> Add </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm"> Add </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm"> Add </button>
                                      
                                    </td>
                            </tr>
                            
                   
                  
                </tbody>
                <tfoot>
                    <tr>
                            <th>Name</th>
                            <th>User name</th>
                            <th>Message</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th>Action</th>
                            
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
    

<div class="container-fluid">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Latest Posts</h4>
        </div>
        <div class="comment-widgets scrollable">
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row m-t-0">
                <div class="p-2"><img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                <div class="comment-text w-100">
                    <h6 class="font-medium">James Anderson</h6>
                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                    <div class="comment-footer">
                        <span class="text-muted float-right">April 14, 2016</span> 
                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row">
                <div class="p-2"><img src="../../assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                <div class="comment-text active w-100">
                    <h6 class="font-medium">Michael Jorden</h6>
                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                    <div class="comment-footer">
                        <span class="text-muted float-right">May 10, 2016</span> 
                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row">
                <div class="p-2"><img src="../../assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
                <div class="comment-text w-100">
                    <h6 class="font-medium">Johnathan Doeting</h6>
                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                    <div class="comment-footer">
                        <span class="text-muted float-right">August 1, 2016</span> 
                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    
</div>
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
    @endsection
