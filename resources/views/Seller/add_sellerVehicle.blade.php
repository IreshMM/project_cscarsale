@extends('admin.layouts.adminapp') 

@section('custom-script')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

@section('content')

    <div class="container-fluid">
            
            <div class="card">


                <form class="form-horizontal" action="{{ route('seller.add_request') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <h4 class="card-title">New Vehicle details</h4>
                        <div class="form-group row">
                            <label for="make" class="col-sm-3 text-right control-label col-form-label">Make</label>
                                <div class=" col-sm-6">
                                    <select class="select2 form-control custom-select car-makes" style="width: 100%; height:36px;">
                                        
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="model" class="col-sm-3 text-right control-label col-form-label">Model</label>
                                <div class=" col-sm-6">
                                    <select class="select2 form-control custom-select car-models" style="width: 100%; height:36px;" name="id_car_model">
                                        
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 text-right control-label col-form-label">Year</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="Year" name="year">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                <div class=" col-sm-6">
                                    <input type="text" class="form-control" id="price" name="price">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="mileage" class="col-sm-3 text-right control-label col-form-label">Mileage</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="mileage" name="mileage">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line2" class="col-sm-3 text-right control-label col-form-label">Color</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="color" name="color">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line3" class="col-sm-3 text-right control-label col-form-label">Condition</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="condition" name="condition">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line2" class="col-sm-3 text-right control-label col-form-label">City</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="city" name="city">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-6">
                                <textarea id="seller_description" class="form-control" name="seller_description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file1" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file2" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file3" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                        <div class="col-sm-6">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="file4" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>

                    <div class="border-top">
                            <div class="card-body">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                </form>
    
        </div>
    </div>

    <script>
            var getMakesRequest = new XMLHttpRequest();
            getMakesRequest.open('GET', '{{ route('resource.make_list') }}');
            getMakesRequest.onload = function() {
                data = JSON.parse(getMakesRequest.responseText);
                var makeListHTML = "";
                data.forEach(element => {
                    makeListHTML = makeListHTML + "<option value=" + element.id_car_make + ">" + element.name + "</option>";
                });

                $(".car-makes").html(makeListHTML);
            }
            getMakesRequest.send();

            $(document).ready(function() {

                // AJAX Request for update models
                $('body').on('change', '.car-makes', function() {
                    $.ajax({
                        method: "GET",
                        url: "{{ route('resource.model_list') }}",
                        data: {id_car_make: this.value}
                    }).done(function(models) {
                        var modelListHTML = "<option value=\"0\" disabled selected>Select a model</option>";
                        models.forEach(element => {
                            modelListHTML = modelListHTML + "<option value=" + element.id_car_model + ">" + element.name + "</option>";
                        });

                        $(".car-models").html(modelListHTML);
                    });
                    return false;
                });

                $('.custom-file-input').change(function() {
                    $(this).next().html($(this).val());
                })

            });
            
     </script>
@endsection