@extends('layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> List Of Employees</h3>
            </div>
        </div>
            <!--<div class="col-sm-4">-->
            <div class="text-left">   
              <a class="btn btn-primary" href="/empAdd">Add new Employee</a>
           <p> </p>
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
                        <th>Tel no</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>ACtion</th>
                        
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
                           
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">update</button>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                        View 
                                    </button>


                                    
                                    <a class="btn btn-danger btn-sm" href="/sell">Delete</a>  
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">update</button>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                            </button>                                       
                                        <button type="button" class="btn btn-danger btn-sm"> Delete </button>
                                      
                                    </td>
                            </tr>
                           
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Update</button>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm"> Delete </button>
                                      
                                    </td>
                            </tr>
                           
                   
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Tel no</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>Action</th>
                            
                    </tr>
                </tfoot>
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
                                    <fieldset>
                                
                                                                                                      
                                        <!-- Text input-->
                                        <div class="form-group row">
                                            <label for="name" class=" col-sm-5 text-right control-label col-form-label">Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="name" readonly >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class=" col-sm-5 text-right control-label col-form-label">Address</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="address"readonly >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dob" class=" col-sm-5 text-right control-label col-form-label">Date of birth</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="dob" readonly >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gender" class=" col-sm-5 text-right control-label col-form-label">Gender</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="gender" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mobile" class=" col-sm-5 text-right control-label col-form-label">mobile</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="mobile" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class=" col-sm-5 text-right control-label col-form-label">Email</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="email" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="account" class=" col-sm-5 text-right control-label col-form-label">Bank Account Number</label>
                                                <div class=" col-sm-6">
                                                    <input type="text" class="form-control"  id="account" readonly>
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="branch" class=" col-sm-5 text-right control-label col-form-label">Bank Branch</label>
                                                <div class=" col-sm-6">
                                                    <input type="text" class="form-control"   id="branch" readonly>
                                                </div>
                                        </div>
                                        
                                    
                
                                    <div class="form-group row">
                                        <label for="Position" class=" col-sm-5 text-right control-label col-form-label">Position</label>
                                        <div class=" col-sm-6">
                                            <input type="text" class="form-control"   readonly  id="line3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hiredate" class=" col-sm-5 text-right control-label col-form-label">Hired Date</label>
                                        <div class=" col-sm-6">
                                            <input type="text" class="form-control"     id="hiredate">
                                        </div>
                                    </div>
                                    
                
                                        
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class=" col-sm-3 text-right control-label col-form-label" for="submit_form"></label>
                                        <div class="col-md-4">
                                            <button id="Ok" name="Ok" class="btn btn-primary">update</button>
                                        </div>
                                    </div>
                                        
                                </fieldset>
                        </form>
                            
                
            </div>
        </div>
    </div>
</div>
<!--model for  Update employee-->
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
                        
                                 <form class="form-horizontal">
                                    <fieldset>
                                
                                                                                                      
                                        <!-- Text input-->
                                        <div class="form-group row">
                                            <label for="name" class=" col-sm-5 text-right control-label col-form-label">Name</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="name"    >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class=" col-sm-5 text-right control-label col-form-label">Address</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="address"   >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="dob" class=" col-sm-5 text-right control-label col-form-label">Date of birth</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="dob"    >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gender" class=" col-sm-5 text-right control-label col-form-label">Gender</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="gender"   >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mobile" class=" col-sm-5 text-right control-label col-form-label">mobile</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="mobile"   >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class=" col-sm-5 text-right control-label col-form-label">Email</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control" id="email"   >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="account" class=" col-sm-5 text-right control-label col-form-label">Bank Account Number</label>
                                                <div class=" col-sm-6">
                                                    <input type="text" class="form-control"  id="account"   >
                                                </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="branch" class=" col-sm-5 text-right control-label col-form-label">Bank Branch</label>
                                                <div class=" col-sm-6">
                                                    <input type="text" class="form-control"   id="branch"   >
                                                </div>
                                        </div>
                                        
                                    
                
                                    <div class="form-group row">
                                        <label for="Position" class=" col-sm-5 text-right control-label col-form-label">Position</label>
                                        <div class=" col-sm-6">
                                            <input type="text" class="form-control"       id="line3">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="hiredate" class=" col-sm-5 text-right control-label col-form-label">Hired Date</label>
                                        <div class=" col-sm-6">
                                            <input type="text" class="form-control"     id="hiredate">
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
                            
                </div>
            </div>
        </div>
    </div>

 <!-- this page js -->
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
         <script src="/assets/libs/toastr/build/toastr.min.js"></script>
  @endsection
 @endsection
