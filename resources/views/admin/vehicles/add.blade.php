@extends('admin.layouts.adminapp') 

@section('custom-script')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection

@section('custom-css')
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
    <link href="/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
@endsection

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

    <div class="row">
    <div class="container-fluid">
        <div class="card">
            <form class="form-horizontal">
                <div class="card-body">
                    <h4 class="card-title">New Vehicle details</h4>
                    @php
                        $fieldSet = []
                    @endphp
                    <div class="form-group row">
                        <label for="model" class="col-sm-3 text-right control-label col-form-label">Model</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" id="model" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="manufacture" class="col-sm-3 text-right control-label col-form-label">Manufacture</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" id="manufacture" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" id="price" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mileage" class="col-sm-3 text-right control-label col-form-label">Mileage</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" id="mileage">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="line2" class="col-sm-3 text-right control-label col-form-label">color</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" id="line2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="line3" class="col-sm-3 text-right control-label col-form-label">year</label>
                        <div class=" col-sm-6">
                            <input type="text" class="form-control" id="line3">
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Description</label>
                        <div class=" col-sm-6">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Images</label>
    
                            <div class="col-sm-6">              
                                        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                                        <div class="container">
                                            <fieldset class="form-group">
                                                <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                                                <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
                                            </fieldset>
                                            <div class="preview-images-zone">
                                                <div class="preview-image preview-show-1">
                                                    <div class="image-cancel" data-no="1">x</div>
                                                    <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
                                                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
                                                </div>
                                                <div class="preview-image preview-show-2">
                                                    <div class="image-cancel" data-no="2">x</div>
                                                    <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>
                                                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
                                                </div>
                                                <div class="preview-image preview-show-3">
                                                    <div class="image-cancel" data-no="3">x</div>
                                                    <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>
                                                    <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                                        <br>
                                        
                        </div>
                    </div>
                        
                <div class="border-top">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="card" data-select2-id="14">
                <div class="card-body" data-select2-id="13">
                    <h5 class="card-title">Form Elements</h5>
                    <div class="form-group row" data-select2-id="12">
                        <label class="col-md-3 m-t-15">Single Select</label>
                        <div class="col-md-9" data-select2-id="11">
                            <select class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option data-select2-id="3">Select</option>
                                <optgroup label="Alaskan/Hawaiian Time Zone" data-select2-id="16">
                                    <option value="AK" data-select2-id="17">Alaska</option>
                                    <option value="HI" data-select2-id="18">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone" data-select2-id="19">
                                    <option value="CA" data-select2-id="20">California</option>
                                    <option value="NV" data-select2-id="21">Nevada</option>
                                    <option value="OR" data-select2-id="22">Oregon</option>
                                    <option value="WA" data-select2-id="23">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone" data-select2-id="24">
                                    <option value="AZ" data-select2-id="25">Arizona</option>
                                    <option value="CO" data-select2-id="26">Colorado</option>
                                    <option value="ID" data-select2-id="27">Idaho</option>
                                    <option value="MT" data-select2-id="28">Montana</option>
                                    <option value="NE" data-select2-id="29">Nebraska</option>
                                    <option value="NM" data-select2-id="30">New Mexico</option>
                                    <option value="ND" data-select2-id="31">North Dakota</option>
                                    <option value="UT" data-select2-id="32">Utah</option>
                                    <option value="WY" data-select2-id="33">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone" data-select2-id="34">
                                    <option value="AL" data-select2-id="35">Alabama</option>
                                    <option value="AR" data-select2-id="36">Arkansas</option>
                                    <option value="IL" data-select2-id="37">Illinois</option>
                                    <option value="IA" data-select2-id="38">Iowa</option>
                                    <option value="KS" data-select2-id="39">Kansas</option>
                                    <option value="KY" data-select2-id="40">Kentucky</option>
                                    <option value="LA" data-select2-id="41">Louisiana</option>
                                    <option value="MN" data-select2-id="42">Minnesota</option>
                                    <option value="MS" data-select2-id="43">Mississippi</option>
                                    <option value="MO" data-select2-id="44">Missouri</option>
                                    <option value="OK" data-select2-id="45">Oklahoma</option>
                                    <option value="SD" data-select2-id="46">South Dakota</option>
                                    <option value="TX" data-select2-id="47">Texas</option>
                                    <option value="TN" data-select2-id="48">Tennessee</option>
                                    <option value="WI" data-select2-id="49">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone" data-select2-id="50">
                                    <option value="CT" data-select2-id="51">Connecticut</option>
                                    <option value="DE" data-select2-id="52">Delaware</option>
                                    <option value="FL" data-select2-id="53">Florida</option>
                                    <option value="GA" data-select2-id="54">Georgia</option>
                                    <option value="IN" data-select2-id="55">Indiana</option>
                                    <option value="ME" data-select2-id="56">Maine</option>
                                    <option value="MD" data-select2-id="57">Maryland</option>
                                    <option value="MA" data-select2-id="58">Massachusetts</option>
                                    <option value="MI" data-select2-id="59">Michigan</option>
                                    <option value="NH" data-select2-id="60">New Hampshire</option>
                                    <option value="NJ" data-select2-id="61">New Jersey</option>
                                    <option value="NY" data-select2-id="62">New York</option>
                                    <option value="NC" data-select2-id="63">North Carolina</option>
                                    <option value="OH" data-select2-id="64">Ohio</option>
                                    <option value="PA" data-select2-id="65">Pennsylvania</option>
                                    <option value="RI" data-select2-id="66">Rhode Island</option>
                                    <option value="SC" data-select2-id="67">South Carolina</option>
                                    <option value="VT" data-select2-id="68">Vermont</option>
                                    <option value="VA" data-select2-id="69">Virginia</option>
                                    <option value="WV" data-select2-id="70">West Virginia</option>
                                </optgroup>
                            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-eej4-container"><span class="select2-selection__rendered" id="select2-eej4-container" role="textbox" aria-readonly="true" title="Hawaii">Hawaii</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 m-t-15">Multiple Select</label>
                        <div class="col-md-9">
                            <select class="select2 form-control m-t-15 select2-hidden-accessible" multiple="" style="height: 36px;width: 100%;" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM" selected="" data-select2-id="6">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD" selected="" data-select2-id="7">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="New Mexico" data-select2-id="8"><span class="select2-selection__choice__remove" role="presentation">×</span>New Mexico</li><li class="select2-selection__choice" title="South Dakota" data-select2-id="9"><span class="select2-selection__choice__remove" role="presentation">×</span>South Dakota</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Radio Buttons</label>
                        <div class="col-md-9">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation1" name="radio-stacked" required="">
                                <label class="custom-control-label" for="customControlValidation1">First One</label>
                            </div>
                             <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required="">
                                <label class="custom-control-label" for="customControlValidation2">Second One</label>
                            </div>
                             <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required="">
                                <label class="custom-control-label" for="customControlValidation3">Third One</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">Checkboxes</label>
                        <div class="col-md-9">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                <label class="custom-control-label" for="customControlAutosizing1">First One</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                                <label class="custom-control-label" for="customControlAutosizing2">Second One</label>
                            </div>
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing3">
                                <label class="custom-control-label" for="customControlAutosizing3">Third One</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3">File Upload</label>
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" required="">
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3" for="disabledTextInput">Disabled input</label>
                        <div class="col-md-9">
                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" disabled="">
                        </div>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
    </div>

    <script>
            $(document).ready(function() {
                document.getElementById('pro-image').addEventListener('change', readImage, false);
                
                $( ".preview-images-zone" ).sortable();
                
                $(document).on('click', '.image-cancel', function() {
                    let no = $(this).data('no');
                    $(".preview-image.preview-show-"+no).remove();
                });
            });
            
            
            
            var num = 4;
            function readImage() {
                if (window.File && window.FileList && window.FileReader) {
                    var files = event.target.files; //FileList object
                    var output = $(".preview-images-zone");
            
                    for (let i = 0; i < files.length; i++) {
                        var file = files[i];
                        if (!file.type.match('image')) continue;
                        
                        var picReader = new FileReader();
                        
                        picReader.addEventListener('load', function (event) {
                            var picFile = event.target;
                            var html =  '<div class="preview-image preview-show-' + num + '">' +
                                        '<div class="image-cancel" data-no="' + num + '">x</div>' +
                                        '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                                        '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                                        '</div>';
            
                            output.append(html);
                            num = num + 1;
                        });
            
                        picReader.readAsDataURL(file);
                    }
                    $("#pro-image").val('');
                } else {
                    console.log('Browser not support');
                }
            }
            
            </script>
@endsection

@section('post-script')
    <script>
        $(document).ready(function() {
            document.getElementById('pro-image').addEventListener('change', readImage, false);
            
            $( ".preview-images-zone" ).sortable();
            
            $(document).on('click', '.image-cancel', function() {
                let no = $(this).data('no');
                $(".preview-image.preview-show-"+no).remove();
            });
        });
        
        var num = 4;
        function readImage() {
            if (window.File && window.FileList && window.FileReader) {
                var files = event.target.files; //FileList object
                var output = $(".preview-images-zone");
        
                for (let i = 0; i < files.length; i++) {
                    var file = files[i];
                    if (!file.type.match('image')) continue;
                    
                    var picReader = new FileReader();
                    
                    picReader.addEventListener('load', function (event) {
                        var picFile = event.target;
                        var html =  '<div class="preview-image preview-show-' + num + '">' +
                                    '<div class="image-cancel" data-no="' + num + '">x</div>' +
                                    '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                                    '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                                    '</div>';
        
                        output.append(html);
                        num = num + 1;
                    });
        
                    picReader.readAsDataURL(file);
                }
                $("#pro-image").val('');
            } else {
                console.log('Browser not support');
            }
        }
    </script>

    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="/assets/libs/toastr/build/toastr.min.js"></script>

    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
@endsection
