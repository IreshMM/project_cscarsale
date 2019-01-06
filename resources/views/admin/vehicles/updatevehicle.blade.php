@extends('admin.layouts.adminapp') 

@section('content')

<style>
        .preview-images-zone {
            width: 100%;
            border: 1px solid #ddd;
            min-height: 180px;
            /* display: flex; */
            padding: 5px 5px 0px 5px;
            position: relative;
            overflow:auto;
        }
        .preview-images-zone > .preview-image:first-child {
            height: 185px;
            width: 185px;
            position: relative;
            margin-right: 5px;
        }
        .preview-images-zone > .preview-image {
            height: 90px;
            width: 90px;
            position: relative;
            margin-right: 5px;
            float: left;
            margin-bottom: 5px;
        }
        .preview-images-zone > .preview-image > .image-zone {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .image-zone > img {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .tools-edit-image {
            position: absolute;
            z-index: 100;
            color: #fff;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            display: none;
        }
        .preview-images-zone > .preview-image > .image-cancel {
            font-size: 18px;
            position: absolute;
            top: 0;
            right: 0;
            font-weight: bold;
            margin-right: 10px;
            cursor: pointer;
            display: none;
            z-index: 100;
        }
        .preview-image:hover > .image-zone {
            cursor: move;
            opacity: .5;
        }
        .preview-image:hover > .tools-edit-image,
        .preview-image:hover > .image-cancel {
            display: block;
        }
        .ui-sortable-helper {
            width: 90px !important;
            height: 90px !important;
        }
        
        .container {
            padding-top: 50px;
        }
        </style>
        
@section('custom-script')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
<div class="row">
        <div class="container-fluid">
            
            <div class="card">
                <form class="form-horizontal" action="{{ route('car_listing.update') }}" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <h4 class="card-title">Update Vehicle details</h4>
                        <div class="form-group row">
                            <label for="make" class="col-sm-3 text-right control-label col-form-label">Make</label>
                                <div class=" col-sm-6">
                                    <select class="select2 form-control custom-select car-makes" style="width: 100%; height:36px;" name="id_car_make">
                                        <option value="{{ $car->model->make->id_car_make }}" selected disabled>{{ $car->model->make->name }}</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="model" class="col-sm-3 text-right control-label col-form-label">Model</label>
                                <div class=" col-sm-6">
                                    <select class="select2 form-control custom-select car-models" style="width: 100%; height:36px;" name="id_car_model">
                                        <option value="{{ $car->model->id_car_model }}" selected disabled>{{ $car->model->name }}</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-sm-3 text-right control-label col-form-label">Buying Price</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="price" name="buying_price" value="{{ $car->buying_price }}">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="price" class="col-sm-3 text-right control-label col-form-label">Selling Price</label>
                                <div class=" col-sm-6">
                                    <input type="text" class="form-control" id="price" name="selling_price" value="{{ $car->selling_price }}">
                                </div>
                            </div>
                        <div class="form-group row">
                            <label for="mileage" class="col-sm-3 text-right control-label col-form-label">Mileage</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="mileage" name="mileage" value="{{ $car->mileage }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line2" class="col-sm-3 text-right control-label col-form-label">Color</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="color" name="color" value="{{ $car->color }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="line3" class="col-sm-3 text-right control-label col-form-label">Year</label>
                            <div class=" col-sm-6">
                                <input type="text" class="form-control" id="year" name="year" value="{{ $car->year }}">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="model" class="col-sm-3 text-right control-label col-form-label">District</label>
                                <div class=" col-sm-6">
                                    <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="city">
                                        <option value="Anuradhapura">Anuradhapura</option>
                                        <option value="Galle">Galle</option>
                                        <option value="Colombo">Colombo</option>
                                    </select>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-6">
                                <textarea id="seller_description" class="form-control" name="seller_description">{{ $car->seller_description }}</textarea>
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
                    <input type="text" name="id_car_listing" id="" value="{{ $car->id_car_listing }}" hidden>

                    <div class="border-top">
                            <div class="card-body">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                </form>
    
        </div>
    </div>

    <script>

            $(document).ready(function() {

                $('.custom-file-input').change(function() {
                    $(this).next().html($(this).val());
                })

            });
            
    </script>
@endsection
