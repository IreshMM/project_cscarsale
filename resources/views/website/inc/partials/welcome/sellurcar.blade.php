
<div id="sellurcar" class="section section-lg ">
    <div class="container" style="height:500px">

      <div style="width: 50%; float:right; padding-right: :150px">
      <div class="container seller-form" id="msform" >
        <form action="{{ route('seller_request.create') }}" method="POST" class="form2" style="width:40%" enctype="multipart/form-data">
              <fieldset>
                  <div class="select1_wrapper"><label>SELECT A MANUFACTURER</label>
                    <div class="select1_inner">
                        <select class="select2 select car-makes" style="width: 100%">
                            <option value="1">Select</option>
                        </select>
                    </div>
                  </div>
                  <div class="select1_wrapper"><label>SELECT A MODEL</label>
                      <div class="select1_inner">
                        <select class="select2 select car-models" style="width: 100%" name="id_car_model">
                            <option value="1">Select</option>
                        </select>
                </div>
                  </div>
                  <div class="select1_wrapper"><label>SELECT A CONDITION</label>
                      <div class="select1_inner">
                        <select class="select2 select" style="width: 100%" name="condition">
                            <option value="Recondtioned">Recondtioned</option>
                            <option value="Used">Used</option>
                            <option value="Brand New">Brand New</option>
                        </select>
                </div>
                  </div>

                  <input type="button" name="next" id = "buttonsell" class="btn-default btn-form2-submit next" value="Next" >
              </fieldset>
              <fieldset>
                  <div class="select1_wrapper"><label>Mileage</label>
                    <div class="form-wrap">

                            <input class="form-input" placeholder="Enter mileage" id="x1" type="text" name="mileage">
                    </div>
                  </div>
                  <div class="select1_wrapper"><label>SELECT A YEAR</label>
                      <div class="select1_inner"><select class="select2 select" style="width: 100%" name="year">
                      <option value="1">Min Year</option>
                      <option value="2">2018</option>
                      <option value="3">2017</option>
                      <option value="4">2016</option>
                      <option value="5">2015</option>
                      <option value="6">2014</option>
                      <option value="7">2013</option>
                  </select></div>
                  </div>
                  <div class="select1_wrapper"><label>Body Type</label>
                    <div class="select1_inner">
                        <select class="select2 select" style="width: 100%" name="body_type">
                            <option value="Sedan">Sedan</option>
                            <option value="7">Mini Car</option>
                            <option value="7">Mini Van</option>
                            <option value="7">Wagon</option>
                            <option value="7">Van</option>
                            <option value="7">Truck</option>
                        </select>
                    </div>
                  </div>
                  <div class="slider-range-wrapper">
                        <div class="txt">PRICE RANGE</div>
                        <div class="slider-range"></div>
                        <div class="clearfix">
                            <input type="text" class="amount" readonly="" name="from">
                            <input type="text" class="amount2" readonly="" name="to">
                        </div>
                </div>

                  <input type="button" name="previous" id = "buttonsell" class="btn-default btn-form2-submit previous" value="Previous" style="width:50%">
                  <input type="button" name="next" id = "buttonsell" class="btn-default btn-form2-submit next" value="Next" style="width:50%">

              </fieldset>
              <fieldset>
                  <div class="select1_wrapper"><label>Upload Images</label>

                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="file1" required>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="file2" required>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="file3" required>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" name="file4" required>

                  </div>


                  <input type="button" name="previous" id = "buttonsell" class="btn-default btn-form2-submit previous" value="Previous" style="width:50%">
                  <input type="button" name="next" id = "buttonsell" class="btn-default btn-form2-submit next" value="Next" style="width:50%">


              </fieldset>

              <fieldset>
              <div class="modal-content">
              <div class="modal-body">

                  <h4 class="modal-title"> Let's get you registered</h4>
                  <div class="rd-mailform"  data-form-output="form-output-global" data-form-type="forms">
                  <div class="row row-fix">
                      <div class="col-sm-12">
                      <div class="form-group form-wrap"><label for="regName">Your
                          Name</label><input type="text" class="form-control" id="regName" name="name"  data-constraints='@Required'>
                      </div>
                      </div>
                      <div class="col-sm-12">
                      <div class="form-group form-wrap">
                          <label for="regEmail">Email</label><input type="text" class="form-control" id="regEmail" name="email"  data-constraints='@Required @Email'>
                      </div>
                      </div>
                      <div class="col-sm-12">
                      <div class="form-group form-wrap">
                          <label for="passwordReg">Password</label><input type="password" class="form-control" id="passwordReg" name="password" data-constraints='@Required'>
                      </div>
                      </div>
                  </div>

                </div>

              </div>

              </div>
              <br>
              <input type="button" name="previous" id = "buttonsell" class="btn-default btn-form2-submit previous" value="Previous" style="width:50%">
              <button type="submit" class="btn-default btn-form2-submit" style="width:50%">Register</button>
              </fieldset>


               {{-- <div class="reset-filters"><a href="#">RESET ALL FILTERS</a></div> --}}
          </form>
      </div>
    </div>
    <div style="width: 45%; float:left; padding-left :150px">
      <p style="font-size:18px">Vehicle leasing offers advantages to both buyers and sellers. For the buyer, lease payments will usually be lower than payments on a car loan would be. Any sales tax is due only on each monthly payment, rather than immediately on the entire purchase price as in the case of a loan.</p><br>
      <p style="font-size:18px">We, at C&S Carsale, consult our customers to choose best for them. We have teamed up with the very best Finance companies to make sure your dream becomes a Reality!.   </p>
      <p style="font-size:22px; color:#2d2d2d"><b>Try our Leasing rates Calculater, Now!</b></p>
    </div>
<div>
</div>
</div>
</div>

  <script>
  //jQuery time
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  $(".next").click(function(){
  	if(animating) return false;
  	animating = true;

  	current_fs = $(this).parent();
  	next_fs = $(this).parent().next();


  	//activate next step on progressbar using the index of next_fs
  	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  	//show the next fieldset
  	next_fs.show();
  	//hide the current fieldset with style
  	current_fs.animate({opacity: 0}, {
  		step: function(now, mx) {
  			//as the opacity of current_fs reduces to 0 - stored in "now"
  			//1. scale current_fs down to 80%
  			scale = 1 - (1 - now) * 0.2;
  			//2. bring next_fs from the right(50%)
  			left = (now * 50)+"%";
  			//3. increase opacity of next_fs to 1 as it moves in
  			opacity = 1 - now;
  			current_fs.css({
          'transform': 'scale('+scale+')',
          'position': 'absolute'
        });
  			next_fs.css({'left': left, 'opacity': opacity});
  		},
  		duration: 800,
  		complete: function(){
  			current_fs.hide();
  			animating = false;
  		},
  		//this comes from the custom easing plugin
  		easing: 'easeInOutBack'
  	});
  });

  $(".previous").click(function(){
  	if(animating) return false;
  	animating = true;

  	current_fs = $(this).parent();
  	previous_fs = $(this).parent().prev();

  	//de-activate current step on progressbar
  	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

  	//show the previous fieldset
  	previous_fs.show();
  	//hide the current fieldset with style
  	current_fs.animate({opacity: 0}, {
  		step: function(now, mx) {
  			//as the opacity of current_fs reduces to 0 - stored in "now"
  			//1. scale previous_fs from 80% to 100%
  			scale = 0.8 + (1 - now) * 0.2;
  			//2. take current_fs to the right(50%) - from 0%
  			left = ((1-now) * 50)+"%";
  			//3. increase opacity of previous_fs to 1 as it moves in
  			opacity = 1 - now;
  			current_fs.css({'left': left});
  			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
  		},
  		duration: 800,
  		complete: function(){
  			current_fs.hide();
  			animating = false;
  		},
  		//this comes from the custom easing plugin
  		easing: 'easeInOutBack'
  	});
  });

  $(".submit").click(function(){
  	return false;
  })

  </script>

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
    });
</script>