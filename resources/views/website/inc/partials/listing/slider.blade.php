<link href="/css/gflexslider.css" rel="stylesheet">
<div class="gslider-wrapper">
    <div id="gslider" class="flexslider">
        <ul class="slides">
            @foreach ($sliderImages as $image)
                <li>
                    <img src="{{ $image }}" alt="" class="img-responsive">
                </li>
            @endforeach
        </ul>
    </div>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            @foreach ($sliderBarImages as $image)
                <li>
                    <img src="{{ $image }}" alt="" class="img-responsive">
                </li>
            @endforeach
        </ul>
    </div>
</div>