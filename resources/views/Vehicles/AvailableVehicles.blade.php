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
                                    <a class="btn btn-success btn-sm" href="/viewVehicle">View</a>
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
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
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
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
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
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
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
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
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
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
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
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
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
                                        <button type="button" class="btn btn-success btn-sm"> view </button>
                                        <button type="button" class="btn btn-warning btn-sm"> Sell </button>
                                      
                                    </td>
                            </tr>
                   
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Vehicle</th>
                        <th>Model</th>
                        <th>Manufacture</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>ACtion</th>
                            
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
