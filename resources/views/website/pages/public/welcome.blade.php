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