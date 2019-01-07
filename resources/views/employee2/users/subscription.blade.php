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
                        <th>Price</th>
                        <th>Details of the car</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                
                    <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                               
                                <td>2011/04/25</td>
                                <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                 </td>
                            </tr>
                           
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                
                                <td>2009/01/12</td>
                                <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                         </button>
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                
                                <td>2012/03/29</td>
                                <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                
                                <td>2008/11/28</td>
                                <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                               
                                <td>2012/12/02</td>
                                <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                
                                <td>2012/08/06</td>
                                <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                
                                <td>2010/10/14</td>
                                <td>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">
                                                View 
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                   
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Email Of Buyer</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Details of the car</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">View Subcriptions</h5>
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
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label"> Name </label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"  readonly id="line3">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Car model</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"  id="line3" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="manufacture" class=" col-sm-5 text-right control-label col-form-label">Manufacture</label>
                                                <div class=" col-sm-6">
                                                    <input type="text" class="form-control" id="manufacture"readonly >
                                                </div>
                                            </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Color</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"   id="line3" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Engine</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"  id="line3" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Email</label>
                                            <div class=" col-sm-6">
                                                <input type="text" class="form-control"   id="line3" readonly>
                                            </div>
                                        </div>
                                       
                    
                                    
                                     <div class="form-group row">
                                         <label for="manufacture" class=" col-sm-5 text-right control-label col-form-label">Manufacture</label>
                                         <div class=" col-sm-6">
                                             <input type="text" class="form-control" id="manufacture"readonly >
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
               <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>-->
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
