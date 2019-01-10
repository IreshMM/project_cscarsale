
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
            {{$car->seller_description}}
    </div>
    <div id="tabs3-2">
        <div class="row row-fix">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="ul3">
                            <li><a href="#"><b>Condition </b>  :{{$car->condition}}</a></li>
                            <li><a href="#"><b>Mileage </b>    :{{$car->mileage}}</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="ul3">
                            <li><a href="#"><b>City </b> :{{$car->city}}</a></li>
                            <li><a href="#"><b>Year </b>       :{{$car->year}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="ul3">
                            <li><a href="#"><b>Color </b>      :{{$car->color}}</a></li>
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
</div>