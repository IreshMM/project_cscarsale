@extends('layouts.adminapp') 

@section('content')
<div class="box-header">
        <div class="row">
            <div class="col-sm-8">
              <h3 class="box-title"> Contact details  </h3>
            </div>
        </div>
          
<div class="container-fluid">
   
<div class="card">
    <div class="card-body">
        <h5 class="card-title"></h5>
        <div class="table-responsive">
            <table  class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Landline</th>
                        <th>Addrees</th>
                        
                        
                    </tr>
                </thead>
                
                    <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>Edinburgh</td>
                            </tr>
                           
                  
                </tbody>
               
            </table>
        </div>
    </div>
</div>
         <!-- this page js -->
   




 <!-- ============================================================== -->
 <div class="row">
    <div class="container-fluid">
        
        <div class="card">
            <form class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">C&S carsale Contact Details</h4>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mobile" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mobile" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="landline" class="col-sm-3 text-right control-label col-form-label">Landline</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="landline" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="line1" class="col-sm-3 text-right control-label col-form-label">Address line 1</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="line1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="line2" class="col-sm-3 text-right control-label col-form-label">Address line 2</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="line2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="line3" class="col-sm-3 text-right control-label col-form-label">Address line 3</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="line3">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
            </form>

    </div>
</div>
    @endsection
