<section id="home" class="section swiper-container swiper-slider swiper-slider-1" data-loop="true" data-autoplay="false"
    data-simulate-touch="false" data-slide-effect="fade">

    <div class="swiper-wrapper text-center">
        <div class="swiper-slide context-dark" data-slide-bg="images/slider-1-1920x1200.jpg">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4> FIND YOUR DREAM CAR </h4>
                            <h1>BMW M5 GRAN TURISMO</h1>
                            <h3>MODEL 2017 <span>$64,000</span></h3>
                            <a class="button" href="#"><span> SEE DETAILS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/slider-2-1920x1200.jpg" style="background-position: 50% 50%;">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4> FIND YOUR DREAM CAR </h4>
                            <h1>Chevrolet Camaro ZL1</h1>
                            <h3>MODEL 2017 <span>$99,000</span></h3>
                            <a class="button" href="#"><span> SEE DETAILS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="images/slider-3-1920x1200.jpg" style="background-position: 50% 50%;">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <h4> FIND YOUR DREAM CAR </h4>
                            <h1>BMW 330e iPERFORMANCE</h1>
                            <h3>MODEL 2017 <span>$99,000</span></h3>
                            <a class="button" href="#"><span> SEE DETAILS</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('inc.partials.welcome.sliderform')
    <!-- Swiper Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev fa-arrow-left"></div>
    <div class="swiper-button-next fa-arrow-right"></div>

</section>

<section class="form-section">
    <div class="container">
        @include('inc.partials.welcome.sliderform')
    </div>
</section>

<script>
    var getMakesRequest = new XMLHttpRequest();
    getMakesRequest.open('GET', '{{ route('make_list') }}');
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
                url: "{{ route('model_list') }}",
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