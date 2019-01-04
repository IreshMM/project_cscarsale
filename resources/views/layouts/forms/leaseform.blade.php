<script language="JavaScript">

        function f2(){
             var regex = /^[0-9]*$/;


             var x = parseInt(document.lease.Valuation.value)*parseFloat(70/100);
             var L = document.lease.max_lease_amount.value;
             document.lease.max_lease_amount.value = parseInt(document.lease.Valuation.value)*parseFloat(70/100) ;


            if(parseInt(document.lease.Valuation.value)<0){
                document.lease.result.value = "ERROR";
            }

            if(!(document.getElementById("x1").value.match(regex))){
                document.lease.result.value = "ERROR";
            }

            if(document.lease.Valuation.value==""){
               alert('please enter your valuation value');
            }

        }


         function f1(){

            var regex = /^[0-9]*$/;

            var L = document.lease.max_lease_amount.value;

            var y =parseInt(document.lease.lease_amount.value)*parseFloat(17/100);
            var z =parseInt(document.lease.lease_amount.value)+y;

            var M = z/parseInt(document.lease.duration.value);

            var round = Math.round(M);
            document.lease.result.value= round ;

            if(parseInt(document.lease.lease_amount.value)>=L){
                document.lease.result.value = "ERROR";
            }

            if(!(document.getElementById("x1").value.match(regex))){
                document.lease.result.value = "ERROR";
            }

            if(document.getElementById("x1").value==""){
                alert('please enter your Valuation value')
            }

            if(document.getElementById("x2").value==""){
                alert('please enter your Lease Amount value')
            }

            if(document.getElementById("x3").value==""){
                alert('please enter your Duration value')
            }



        }


</script>


<div class="container seller-form" id="msform">
  <!-- <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins"> -->
      <!-- <div class="wrapper wrapper--w680"> -->
          <!-- <div class="card card-4"> -->
              <!-- <div class="card-body"> -->
                <H3><b>LEASING CALCULATER<b></H3>
                  <form name = "lease" class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
						<div class="row row-15 row-fix">

              <div class="col-md-12">

                <div class="form-wrap">

									<input class="form-input" placeholder="Enter valuated amount" id="x1" type="text" name="Valuation">
                </div>
							</div>

              <div class="col-md-12">
								<input type="button" class="btn-default btn-cf-submit3" onClick = "f2()" value="valuate" name="submit" style="width:150px"></button>
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
                <input type="button" class="btn-default btn-cf-submit3" onClick = "f1()" value="Calculate" name="submit"></button>
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
