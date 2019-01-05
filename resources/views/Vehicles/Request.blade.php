@extends('layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> Request </h3>
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
                        <th>Model</th>
                        <th>Manufacture</th>
                        <th>Status</th>
                        <th>Message</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                
                    <tbody>
                            
                           
                           
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>
                           
                                        
                                    
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                  Approve 
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
                           
                                       
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                  Approve 
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
                           
                                       
                                    
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                  Approve 
                                        </button>
                                    </td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>
                           
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                Approve 
                                        </button>
                                    </td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>
                           
                                       
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                  Approve 
                                        </button>
                                    </td>
                            </tr>
                   
                  
                </tbody>
                <tfoot>
                    <tr>
                            <th>Seller</th>
                            <th>Model</th>
                            <th>Manufacture</th>
                            <th>Status</th>
                            <th>Message</th>
                            <th>Action</th>
                            
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- Modal  view car details-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
                                    <label for="seller" class=" col-sm-5 text-right control-label col-form-label">Seller</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="seller" readonly>
                                    </div>
                                </div>
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
                                 <label for="price" class=" col-sm-5 text-right control-label col-form-label"> Buying Price</label>
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
                                 <label for="cono1" class=" col-sm-5 text-right control-label col-form-label">Description</label>
                                 <div class="col-sm-6">
                                     <textarea class="form-control" readonly></textarea>
                                 </div>
                             </div>
                             <div class="form-group row">
                                    <label for="CompanyPrice" class=" col-sm-5 text-right control-label col-form-label">Selling Price</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="Cprice" >
                                    </div>
                                </div>
     
                        
                         <!-- Button -->
                         
                                <div class="row">
                                        <div class="col-md-3 col-sm-12">
                                                <button type="button" class="btn btn-lg btn-block btn-outline-success" id="ts-success">Approved</button>
                                            </div>
                                        <div class="col-md-3 col-sm-12">
                                                <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#Modal3">
                                                        Images 
                                                </button>
                                        </div> 
                            
                                       
                            
                                 </div>
                             
                       </fieldset>
                  
                    
                </div>

                        
                         
                        
                        <!--modal for showing images-->
                        <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Images</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="../../assets/images/background/img5.jpg" width="100% ">
                                        </div>
                                        <div class="row el-element-overlay">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="card">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1"> <img src="/assets/images/big/img1.jpg" alt="user" />
                                                                <div class="el-overlay">
                                                                    <ul class="list-style-none el-info">
                                                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/big/img1.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="card">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1"> <img src="/assets/images/big/img2.jpg" alt="user" />
                                                                <div class="el-overlay">
                                                                    <ul class="list-style-none el-info">
                                                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/big/img2.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="card">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1"> <img src="/assets/images/big/img3.jpg" alt="user" />
                                                                <div class="el-overlay">
                                                                    <ul class="list-style-none el-info">
                                                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="/assets/images/big/img3.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="card">
                                                        <div class="el-card-item">
                                                            <div class="el-card-avatar el-overlay-1"> <img src="/assets/images/big/img4.jpg" alt="user" />
                                                                <div class="el-overlay">
                                                                    <ul class="list-style-none el-info">
                                                                        <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="/assets/images/big/img4.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                                        <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            <!--<div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>-->
                                          </div>
                               
                                     </div>
                                 </div> 
                             </div> <!--finish Image modal-->
                                
                                
                                
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

  
  <!-- this page js -->
  @section('image-script')
  <script src="/assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
  <script src="/assets/libs/magnific-popup/meg.init.js"></script>

  <script src="/assets/libs/toastr/build/toastr.min.js"></script>
  <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

  @endsection
  

  @endsection
