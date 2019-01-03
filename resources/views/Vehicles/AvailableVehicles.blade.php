@extends('layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title">  Available Cars</h3>
            </div>
        </div>
            <!--<div class="col-sm-4">-->
            <div class="text-left">   
              <a class="btn btn-primary" href="/addVehicle">Add new Car</a>
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
                                        
                                       
                                    <a class="btn btn-primary btn-sm" href="/updateVehicle">Update></a>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">View</button>          
                                    <a class="btn btn-warning btn-sm" href="/sell">sell</a>  
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">  View  </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">                                                 View                                          </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">                                                 View                                          </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">                                                 View                                          </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">                                                 View                                          </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">                                                 View                                          </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>
                           
                                        <button type="button" class="btn btn-primary btn-sm">Update</button>
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Modal1">                                                 View                                          </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                   
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Vehicle</th>
                        <th>Model</th>
                        <th>Manufacture</th>
                        <th> Selling Price</th>
                        <th>Image</th>
                        <th>Action</th>
                            
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
  <!-- Modal  view car details-->
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
