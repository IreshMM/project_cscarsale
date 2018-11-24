@extends('layouts.app')

@section('content')
    @include('inc.partials.welcome.slider')
    @include('inc.partials.welcome.reviews')
    @include('inc.partials.welcome.title')
    @include('inc.partials.welcome.offers')
    @include('inc.partials.welcome.whyus')
    @include('inc.partials.welcome.numbers')
    @include('inc.partials.welcome.testimonials')
    @include('inc.partials.welcome.prefooter')

    @include('inc.modals.login')
    @include('inc.modals.register')

    <div class="snackbars" id="form-output-global"></div>
    <script src="js/bootstrap.min.js"></script>
@endsection

<!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->