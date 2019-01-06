<div id="leasecal" class="section section-lg testimonials-bg novi-background custom-bg-image image">

    <div class="container">
      <script language="JavaScript">

              function f1(){

                   var regex = /^[0-9]*$/;


                   var x = parseInt(document.lease.Valuation.value)*parseFloat(70/100);
                   var p = document.lease.max_lease_amount.value;

                   p = parseInt(document.lease.Valuation.value)*parseFloat(70/100) ;

                   var round1 = Math.round(x);
                   document.lease.max_lease_amount.value= round1 ;

                  if(parseInt(document.lease.Valuation.value)<0){
                      document.lease.result.value = "ERROR";

                  }

                  if(!(document.getElementById("x1").value.match(regex))||document.getElementById("x1").value==""){
                      document.lease.result.value = "ERROR";
                      document.lease.max_lease_amount.value = "ERROR";
                      document.lease.total_pay.value = "ERROR";
                      alert('please enter your Valuation value')
                  }

                 // if(document.getElementById("x1").value==""){
                   // document.lease.result.value = "ERROR";
                    //document.lease.max_lease_amount.value = "ERROR";
                    //document.lease.total_pay.value = "ERROR";
                    //alert('please enter your Valuation value')
                 // }



              }


               function f2(){

                  var regex = /^[0-9]*$/;

                  var p = document.lease.max_lease_amount.value;

                  var y =parseInt(document.lease.lease_amount.value)*parseFloat(17/100);
                  var r =parseInt(document.lease.lease_amount.value)+y;

                  var q = r/parseInt(document.lease.duration.value);

                  var round = Math.round(q);
                  document.lease.result.value= round ;

                  var round2 = Math.round(r)
                  document.lease.total_pay.value= round2;

                  if(parseInt(document.lease.lease_amount.value)>=p){
                      document.lease.total_pay.value = "ERROR";
                      document.lease.result.value = "ERROR";
                      alert('enter valid Lease amount')
                  }

                  //if(parseInt(document.lease.lease_amount.value)>=p){
                   //   document.lease.result.value = "ERROR";
                 // }

                  if(!(document.getElementById("x1").value.match(regex))||document.getElementById("x1").value==""){
                      document.lease.result.value = "ERROR";
                      alert('please enter your Valuation value')

                  }

                 // if(document.getElementById("x1").value==""){
                   //   alert('please enter your Valuation value')
                 // }

                  if(!(document.getElementById("x2").value.match(regex))){
                      document.lease.result.value = "ERROR";

                  }



                  if(!(document.getElementById("x2").value.match(regex))){
                      document.lease.total_pay.value = "ERROR";
                  }

                  if(document.getElementById("x2").value==""){
                      alert('please enter your Lease Amount value')
                  }

                  if(document.getElementById("x3").value==""){
                      alert('please enter your Duration value')
                  }



              }


      </script>


      <div class="container seller-form" id="msform" >
        <!-- <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins"> -->
            <!-- <div class="wrapper wrapper--w680"> -->
                <!-- <div class="card card-4"> -->
                    <!-- <div class="card-body"> -->
                    <div style="width: 45%; float:left;padding-left:150px">
                      <H3><b>LEASING CALCULATER<b></H3>
                        <form name = "lease" class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php" style="width:90%" >



                      <div class="row row-15 row-fix" >

                        <div class="col-md-12">

                          <div class="form-wrap">

                            <input class="form-input" placeholder="Enter valuated amount" id="x1" type="text" name="Valuation">
                          </div>
                        </div>

                        <div class="col-md-12">
                          <input type="button" class="btn-default btn-cf-submit3" onClick = "f1()" value="valuate" name="submit" style="width:150px"></button>
                        </div>

                        <div class="col-md-12">
                          <div class="form-wrap">
                            <input class="form-input" placeholder="Max lease amount" type="text" name="max_lease_amount" disabled>
                          </div>
                        </div>

                          <div class="col-sm-12">
                           <div class="form-wrap">
                              <input class="form-input"placeholder="Lease amount(Less than max lease amount)" id="x2" type="text" name="lease_amount" Required>
                           </div>
                          </div>


                          <div class="col-sm-12">
                            <div class="form-wrap">
                               <input class="form-input"placeholder="Duration(Months)" id="x3" type="text" name="duration" Required>
                            </div>
                          </div>

                        <div class="col-md-12">
                          <input type="button" class="btn-default btn-cf-submit3" onClick = "f2()" value="Calculate" name="submit"></button>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-wrap">
                            <input class="form-input" placeholder="Total Payment" type="text" name="total_pay" disabled>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-wrap">
                            <input class="form-input" placeholder="Result" type="text" name="result" disabled>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <input type="reset" class="btn-default btn-cf-submit3"  value="Reset" name="reset" style="width:150px"></button>
                        </div>

                       </form>
                      </div>
                      </div>

                      <div style="width:45%; float:right; padding-right:150px">

                        <p style="font-size:18px">Vehicle leasing offers advantages to both buyers and sellers. For the buyer, lease payments will usually be lower than payments on a car loan would be. Any sales tax is due only on each monthly payment, rather than immediately on the entire purchase price as in the case of a loan.</p><br>
                        <p style="font-size:18px">We, at C&S Carsale, consult our customers to choose best for them. We have teamed up with the very best Finance companies to make sure your dream becomes a Reality!.   </p>
                        <p style="font-size:22px; color:#2d2d2d"><b>Try our Leasing rates Calculater, Now!</b></p>
                    </div>


                 <!-- </div> -->
                <!-- </div> -->
              <!-- </div> -->
            <!-- </div> -->
          </div>

      <!-- Jquery JS-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <!-- Vendor JS-->
      <script src="vendor/select2/select2.min.js"></script>
      <script src="vendor/datepicker/moment.min.js"></script>
      <script src="vendor/datepicker/daterangepicker.js"></script>
      <script src={{asset('js/calculation.js')}} defer></script>

      <!-- Main JS-->
      <script src="js/global.js"></script>

    </div>
</div>
