@extends('layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> Sellers Details </h3>
            </div>
        </div>
          
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                            <th>Seller</th>
                            <th>Email</th>
                            <th>Model</th>
                            <th>Price</th>
                            <th>Message</th>
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
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                      
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
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                      
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
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
                                      
                                    </td>
                            </tr>
                           
                </tbody>
                <tfoot>
                    <tr>
                            <th>Seller</th>
                            <th>Email</th>
                            <th>Model</th>
                            <th>Price</th>
                            <th>Message</th>
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
                             
                                 <!-- Form Name -->
                               
                             
                                     <!-- Text input-->
                                    
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label"> first Name</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"  readonly id="firstname">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label"> last Name</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"  id="lastname" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Street Address</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"   id="address" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">City</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"  id="city" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Email</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"   id="email" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Phone</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"   id="phone" readonly>
                                            </div>
                                        </div>
                    
                                     
                                     <div class="form-group row">
                                         <label for="line3" class=" col-sm-5 text-right control-label col-form-label">No of cars listed</label>
                                         <div class=" col-sm-6">
                                             <input type="text" class="form-control" id="line3" readonly>
                                         </div>
                                     </div>
                                 <!-- Button -->
                                    <div class="form-group">
                                            <label class=" col-sm-3 text-right control-label col-form-label" for="submit_form"></label>
                                            <div class="col-md-4">
                                                <button id="Ok" name="Ok" class="btn btn-primary">OK</button>
                                            </div>
                                    </div>
                                     
             
                                 
                                     
                                 </fieldset>
                             </form>
                       
                           <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
