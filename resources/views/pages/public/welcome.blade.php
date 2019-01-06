@extends('layouts.app')

@section('content')
    @include('inc.partials.welcome.slider')
    @include('inc.partials.welcome.reviews')
    @include('inc.partials.welcome.title')
    @include('inc.partials.welcome.offers')
    @include('inc.partials.welcome.whyus')
    @include('inc.partials.welcome.numbers')
    @include('inc.partials.welcome.sellurcar')
    @include('inc.partials.welcome.lease')
    @include('inc.partials.welcome.testimonials')
    @include('inc.partials.contact.contact')
    @include('inc.partials.welcome.prefooter')
    @include('inc.modals.login')
    @include('inc.modals.register')

    <div class="snackbars" id="form-output-global"></div>
    <script src="js/bootstrap.min.js"></script>
@endsection
@section('custom-css')
<style>



    #main {
        display: flex;
        flex-flow: column;
        height: 100%;
    }

    #main .py-4 {
        flex: 1 1 auto;
        height: 100%;
        position: relative;
    }

    #main> :not(.py-4) {
        flex: 0 1 auto;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        /* box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4); */
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    #msform fieldset:not(:first-of-type) {
        display: none;
    }

</style>

@endsection
