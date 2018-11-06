@extends('layouts.app')

@section('content')
<div class="section breadcrumbs1_wrapper novi-background">
    <div class="container">
        <div class="breadcrumbs1"><a href="index.html">Home</a><span></span>Contact us</div>
    </div>
</div>
<div class="section container-fluid novi-background">
    <div class="google-map-container google-map-2" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="14" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
        <div class="google-map"></div>
        <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
        </ul>
    </div>
</div>
<div class="section section-md novi-background bg-cover">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <div class="contact-banner">

                    <div class="banner-title">Autozone</div>

                    <br>
                    <p>202 W 7th St, Suite 233 Los Angeles, CA 90014 USA</p>
                    <p><i class="fa fa-envelope novi-icon" aria-hidden="true"></i> - <a href="mailto:#">info@demolink.org</a></p>
                    <p><i class="fa fa-phone novi-icon" aria-hidden="true"></i> - <a href="tel:#">1-800-624-5462</a></p>
                    <p><i class="fa fa-clock-o novi-icon" aria-hidden="true"></i> - Monday to Friday from 09.00 to 18.00</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque varius consectetur tempor. Cras
                        suscipit, mi ut ultrices pharetra, justo orci tempus augue, et lobortis nulla massa vel eros. Proin non
                        lacus ex. Integer maximus malesuada tincidunt. Nunc pellentesque elit quis elit ultrices euismod.
                        Vivamus fermentum laoreet leo. Praesent ut ex in arcu fermentum hendrerit a sit amet urna. Praesent
                        fringilla augue tellus, in lobortis urna molestie ac. Mauris volutpat quam nec nibh bibendum
                        ullamcorper. Vivamus eget imperdiet erat. Vivamus porta nisi mi.</p><br>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-md-offset-1">
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
                    <div class="row row-15 row-fix">
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="form-label" for="forms-name">Full name</label>
                                <input class="form-input" id="forms-name" type="text" name="name" data-constraints="@Required"> </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-wrap">
                                <label class="form-label" for="forms-email">E-mail address</label>
                                <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required"> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-wrap">
                                <label class="form-label" for="forms-message">Message</label>
                                <textarea class="form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="btn-default btn-cf-submit3">SEND MESSAGE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection