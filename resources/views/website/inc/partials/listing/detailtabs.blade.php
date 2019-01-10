
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
                {{-- Details columns with values --}}
                <div class="row">
                    @php
                        $size = sizeof($specDetails);
                        $keys = array_keys($specDetails);
                    @endphp
                    <div class="col-sm-6">
                        <ul class="ul3">
                            @for ($i = 0; $i < ceil($size / 2); $i++)
                                <li><a href="#"><b>{{ ucfirst($keys[$i]) }}</b> :{{ $specDetails[$keys[$i]] }}</a></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="ul3">
                            @for ($i = ceil($size / 2); $i < $size; $i++)
                                <li><a href="#"><b>{{ $keys[$i] }}</b> :{{ $specDetails[$keys[$i]] }}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                {{-- Features column with no values --}}
                <div class="row">
                    @php
                        $size = sizeof($specFeatures);
                    @endphp
                    <div class="col-sm-6">
                        <ul class="ul3">
                            @for ($i = 0; $i < ceil($size / 2); $i++)
                                <li><a href="#">{{ $specFeatures[$i] }}</a></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="ul3">
                            @for ($i = ceil($size / 2); $i < $size; $i++)
                                <li><a href="#">{{ $specFeatures[$i] }}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>