<div id="sellurcar" class="section section-lg ">
    <div class="container" style="height:600px">
      <div class="container seller-form" id="msform" >
          <form action="javascript:;" class="form2" style="width:40%" >
              <fieldset>
                  <div class="select1_wrapper"><label>SELECT A MANUFACTURER</label>
                      <div class="select1_inner"><select class="select2 select" style="width: 100%">
                      <option value="1">Any Make</option>
                      <option value="2">Alfa Romeo</option>
                      <option value="3">Aston Martin</option>
                      <option value="4">Audi</option>
                      <option value="5">Bentley</option>
                      <option value="6">BMW</option>
                      <option value="7">Bugatti</option>
                  </select></div>
                  </div>
                  <div class="select1_wrapper"><label>SELECT A MODEL</label>
                      <div class="select1_inner"><select class="select2 select" style="width: 100%">
                      <option value="1">Any Model</option>
                      <option value="2">Model 1</option>
                      <option value="3">Model 2</option>
                      <option value="4">Model 3</option>
                      <option value="5">Model 4</option>
                      <option value="6">Model 5</option>
                      <option value="7">Model 6</option>
                  </select></div>
                  </div>
                  <div class="select1_wrapper"><label>SELECT A TYPE</label>
                      <div class="select1_inner"><select class="select2 select" style="width: 100%">
                      <option value="1">Any Type</option>
                      <option value="2">Type 1</option>
                      <option value="3">Type 2</option>
                      <option value="4">Type 3</option>
                      <option value="5">Type 4</option>
                      <option value="6">Type 5</option>
                      <option value="7">Type 6</option>
                  </select></div>
                  </div>
                  <input type="button" name="previous" id = "buttonsell" class="btn-default btn-form2-submit previous" value="Previous">
                  <input type="button" name="next" id = "buttonsell" class="btn-default btn-form2-submit next" value="Next">
              </fieldset>
              <fieldset>
                  <div class="select1_wrapper"><label>SELECT A STATUS</label>
                      <div class="select1_inner"><select class="select2 select" style="width: 100%">
                      <option value="1">Any Status</option>
                      <option value="2">Status 1</option>
                      <option value="3">Status 2</option>
                      <option value="4">Status 3</option>
                      <option value="5">Status 4</option>
                      <option value="6">Status 5</option>
                      <option value="7">Status 6</option>
                  </select></div>
                  </div>
                  <div class="select1_wrapper"><label>SELECT A MIN YEAR</label>
                      <div class="select1_inner"><select class="select2 select" style="width: 100%">
                      <option value="1">Min Year</option>
                      <option value="2">2018</option>
                      <option value="3">2017</option>
                      <option value="4">2016</option>
                      <option value="5">2015</option>
                      <option value="6">2014</option>
                      <option value="7">2013</option>
                  </select></div>
                  </div>
                  <div class="select1_wrapper"><label>SELECT A MAX YEAR</label>
                      <div class="select1_inner"><select class="select2 select" style="width: 100%">
                      <option value="1">Max Year</option>
                      <option value="2">2018</option>
                      <option value="3">2017</option>
                      <option value="4">2016</option>
                      <option value="5">2015</option>
                      <option value="6">2014</option>
                      <option value="7">2013</option>
                  </select></div>
                  </div>
                  <div class="slider-range-wrapper">
                      <div class="txt">PRICE RANGE</div>
                      <div class="slider-range"></div>
                      <div class="clearfix"><input type="text" class="amount" readonly="">
                          <input type="text" class="amount2" readonly=""></div>
                  </div>
                  <input type="button" name="previous" id = "buttonsell" class="btn-default btn-form2-submit previous" value="Previous">
                  <button type="submit" id = "buttonsell" class="btn-default btn-form2-submit" >SUBMIT</button>
              </fieldset>
               {{-- <div class="reset-filters"><a href="#">RESET ALL FILTERS</a></div> --}}
          </form>
      </div>
    </div>
<div>
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
