@extends('layouts.adminapp') 

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
                           
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                 </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                               
                                <td>2011/07/25</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                
                                <td>2009/01/12</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                
                                <td>2012/03/29</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                
                                <td>2008/11/28</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                               
                                <td>2012/12/02</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                
                                <td>2012/08/06</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm"> Send Email </button>
                                      
                                </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                
                                <td>2010/10/14</td>
                                <td>
                           
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
