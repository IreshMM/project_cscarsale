<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Leasing Calculator </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
   
    <link href="css/main.css" rel="stylesheet" media="all">
    
</head>

<body>
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
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Leasing calculator</h2>
                    <form name="lease" >
                        

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Valuation</label>
                                    <input class="input--style-4" type="text" name="Valuation" id="x1" Required>
                                </div>
                            </div>


                            <div class="p-t-15">
                                   
                                   <input type="button" class="submit" onClick = "f2()" value="valuate" name="submit"/>
                            </div>

                            <br>


                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Max Lease amount</label>
                                    <input class="input--style-4" type="text" name="max_lease_amount" disabled>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Lease amount(Less than Max lease amount)</label>
                                    <input class="input--style-4" type="text" name="lease_amount" id="x2" Required>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Duration (Months)</label>
                                    <input class="input--style-4" type="text" name="duration" id="x3" Required>
                                </div>
                            </div>


                            <div class="p-t-15">
    
                                    <input type="button" class="submit" onClick = "f1()" value="Calculate" name="submit"  />
                            </div>
                            
                            <br>
                                


                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Result</label>
                                    <input class="input--style-4" type="text" name="result" disabled>
                                </div>
                            </div>

                            <br>

                            <div class="p-t-15">
                                    <input type="reset" value="Reset" name="reset" />
                            </div>

                        
                                              
                    </form>
                </div>
            </div>
        </div>
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

</body>
</html>
