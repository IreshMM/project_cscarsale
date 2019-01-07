@extends('admin.layouts.adminapp') 

@section('content')

<div class="card">
    <div class="card-body wizard-content">
        <h4 class="card-title">Update Employee</h4>
        <h6 class="card-subtitle"></h6>
        <form id="example-form" action="{{ route('employee.update') }}" class="m-t-40" method="POST">
            <div>
                                 
 
                                <h3>Profile</h3>
                                <section>
                                    <label for="name">First name *</label>
                                    <input id="name" name="first_name" type="text" class="required form-control" value="{{ $user->first_name }}">
                                    <label for="surname">Last name *</label>
                                    <input id="surname" name="last_name" type="text" class="required form-control" value="{{ $user->last_name }}">
                                   
                                    <label for="address">Address</label>
                                    <input id="address" name="street_address" type="text" class="form-control" value="{{ $user->street_address }}">
                                    <label for="dob">Date of Birth</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="datepicker-autoclose" name ="dob" placeholder="mm/dd/yyyy" value="{{ $employee->dob }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                    <label for="address">Gender</label>
                                    <div class="col-md-9">
                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="gender">
                                            <option>Select</option>
                                            <option value="m" selected disabled>{{ $employee->gender }}</option>
                                           
                                        </select>
                                    </div>
                                    <label for="nic">NIC</label>
                                    <input id="nic" name="nic" type="text" class="form-control" value="{{ $employee->nic }}">
                                    <p>(*) Mandatory</p>
                                    <input name="id" value="{{ $employee->id }}" id="id" hidden>
                                </section>
                               
                                
                                <h3>Contact Details</h3>
                                    <section>
                                        <label for="email">Email *</label>
                                        <input id="email" name="email" type="text" class="required form-control" value="{{ $user->email }}">
                                        <label for="mobile">Mobile *</label>
                                        <input id="mobile" name="phone" type="text" class="required form-control" value="{{ $user->phone }}">
                                        <label for="landline">Land line *</label>
                                        <input id="mobile" name="land_line" type="text" class=" form-control" value="{{ $employee->land_line }}">
                                        <p>(*) Mandatory</p>
                                    
                                    <h3>Bank details</h3>
                                   
                                        <label for="bank account">Bank Account no *</label>
                                        <input id="bank_account_no" name="bank_account" type="text" class="required form-control" value="{{ $employee->bank_account }}">
                                        <label for="branch">Bank branch *</label>
                                        <input id="branch" name="branch" type="text" class="required form-control" value="{{ $employee->branch }}">
                                        
                                        <p>(*) Mandatory</p>
                                    </section>
                                    <h3>Position</h3>
                                    <section>
                                        <label for="position">Position *</label>
                                        <input id="position" name="position" type="text" class="required form-control" value="{{ $employee->position }}">
                                        <label for="hire date">Hired date</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="datepicker-autoclose"name ="hired_date" placeholder="mm/dd/yyyy" value="{{ $employee->hired_date }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        
                                        <p>(*) Mandatory</p>
                                    </section>
                                    <h3>Account</h3>
                                    <section>
                                        <label for="userName">Email *</label>
                                        <input id="email" name="email" type="text" class="required form-control" value="{{ $user->email }}">
                                        <label for="password">Password *</label>
                                        <input id="password" name="password" type="text" class="required form-control">
                                        <label for="confirm">Confirm Password *</label>
                                        <input id="confirm" name="confirm_password" type="text" class="required form-control">
                                        <p>(*) Mandatory</p>
                                    </section>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        

           
      
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
    <script src="/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="/assets/libs/jquery-validation/dist/jquery.validate.min.js"></script>
   
    <script>
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
     form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            form.submit();
        }
    });
    </script>
     <!-- This Page JS -->
    
    
     <script src="/assets/libs/quill/dist/quill.min.js"></script>
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
         
         jQuery('#datepicker-autoclose').datepicker({
             autoclose: true,
             todayHighlight: true
         });
         var quill = new Quill('#editor', {
             theme: 'snow'
         });
 
     </script>
    
@endsection