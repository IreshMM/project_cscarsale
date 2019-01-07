<div class="tabs2-wrapper">
    <ul class="tabs clearfix" data-tabgroup="second-tab-group">
        <li><a href="#tabs3-1">VEHICLE OVERVIEW</a></li>
        <li class="active"><a href="#tabs3-2">FEATURES & OPTIONS</a></li>

    </ul>
</div>

<div id="second-tab-group" class="tabgroup">
    <div id="tabs3-1">
        <div class="title2">
        </div>


          {{$cars->seller_description}}
        


    </div>
    <div id="tabs3-2">

        <div class="row row-fix">
            <div class="col-sm-6">

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="ul3">
                            <li><a href="#"><b>Condition </b>  :{{$cars->condition}}</a></li>
                            <li><a href="#"><b>Mileage </b>    :{{$cars->mileage}}</a></li>


                    </div>
                    <div class="col-sm-6">
                        <ul class="ul3">
                          <li><a href="#"><b>City </b> :{{$cars->city}}</a></li>
                          <li><a href="#"><b>Year </b>       :{{$cars->year}}</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="ul3">
                          <li><a href="#"><b>Color </b>      :{{$cars->color}}</a></li>

                          <li><a href="#"><b>Selling Price </b>:Rs.{{$cars->selling_price}}.00</a></li>

                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="ul3">
                            <li><a href="#">Alloy Wheels</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="tabs3-3">

        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tortor dui, scelerisque ac nisi sed, rutrum euismod sem. Nunc
            eu tincidunt nulla. In posuere lorem sit amet felis placerat, quis hendrerit est rutrum. Phasellus non dui aliquam,
            eleifend enim dictum, laoreet nisl. Nam arcu nisi, venenatis nec semper sed, semper eget diam. Vestibulum id
            lorem metus. Aliquam felis elit, imperdiet non rutrum ac, euismod ut diam. Donec iaculis at lorem et placerat.
            Aenean dictum orci sed lectus vulputate, ut mattis justo feugiat. Pellentesque sodales urna quis nunc iaculis
            lobortis. Sed vel ligula egestas, tristique urna sit amet, rutrum enim. Fusce non dignissim tellus, sed commodo
            nulla. Nulla posuere, nunc ac ultrices pretium, mi quam dignissim magna, vel luctus magna sapien et velit. Quisque
            in felis odio.
        </p>

        <div class="google-map-container google-map-2" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="14"
            data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
            </ul>
        </div>

    </div>

</div>
