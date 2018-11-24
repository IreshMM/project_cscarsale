@inlcude('inc.partials.listing.breadcumb')

<div class="section section-md-bottom content novi-background bg-cover">
    <div class="container">

        <div class="row row-fix">
            <div class="col-sm-12 col-md-9 column-content">

                @include('inc.partials.listing.slider')
                @include('inc.partials.listing.detailtabs')

            </div>

            @include('inc.partials.listing.sidebar')
        </div>
        
        @include('inc.partials.listing.offers')
    </div>
</div>