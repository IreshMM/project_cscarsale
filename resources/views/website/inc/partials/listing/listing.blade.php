@include('website.inc.partials.listing.breadcumb')
<link href="css/shCore.css" rel="stylesheet" type="text/css" />
<link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
<!-- Demo CSS -->
<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/gflexslider.css" type="text/css" media="screen" />

<!-- Modernizr -->
<script src="js/modernizr.js"></script>
<div class="section section-md-bottom content novi-background bg-cover">
    <div class="container">

        <div class="row row-fix">
            <div class="col-sm-12 col-md-9 column-content">

                @include('website.inc.partials.listing.slider')
                @include('website.inc.partials.listing.detailtabs')

            </div>

            @include('website.inc.partials.listing.sidebar')
        </div>


    </div>
</div>
