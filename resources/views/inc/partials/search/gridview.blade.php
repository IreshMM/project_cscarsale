<div id="tabs2-2">

    {{-- Row by row grid starts here --}}

    @for ($row = 0; $row < $count; $row += 3)
    <div class="row">
        @for ($col = $row; $col < 3; $col++)
        <?php $item = $listings[$col]; ?>
        <div class="col-sm-4">
                <div class="product-box-vertical">
                    <div class="box-vertical-inner">
                        <figure><a href="details.html"><img src="images/listing-1-260x230.jpg" alt="" class="img-responsive"></a></figure>
                        <div class="caption">
                            <div class="caption-header">
                                <div class="info1">
                                    <div class="txt1"><a href="details.html">{{ $item->model()->first()->name }}</a></div>
                                    <div class="txt2"><span class="txt">FIRST DRIVE REVIEW</span> <span class="stars">                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star-o novi-icon" aria-hidden="true"></i>                             </span>
                                    </div>
                                </div>
                            </div>
                            <p>{{ substr(($item->seller_description), 0, 332) . '...' }}</p>
    
                            <ul class="list1">
                                <li><a href="#">Registered {{ $item->year }}</a></li>
                                <li><a href="#">{{ $item->condition }}</a></li>
                                <li><a href="#">{{ $item->city }}</a></li>
                                <li><a href="#">Petrol</a></li>
                            </ul>
    
                            <div class="txt5">31,730 KM</div>
                            <div class="caption-footer">
                                <div class="info2">
                                    <div class="txt6">$68,213</div>
                                </div>
                                <div class="info3">
                                    <div class="txt7"><a href="details.html" class="btn-default btn3">VIEW DETAILS</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
    @endfor
    <div class="row">
        <div class="col-sm-4">
            <div class="product-box-vertical">
                <div class="box-vertical-inner">
                    <figure><a href="details.html"><img src="images/listing-1-260x230.jpg" alt="" class="img-responsive"></a></figure>
                    <div class="caption">
                        <div class="caption-header">
                            <div class="info1">
                                <div class="txt1"><a href="details.html">{{ $item->model()->first()->name }}</a></div>
                                <div class="txt2"><span class="txt">FIRST DRIVE REVIEW</span> <span class="stars">                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star novi-icon" aria-hidden="true"></i>                               <i class="fa fa-star-o novi-icon" aria-hidden="true"></i>                             </span>
                                </div>
                            </div>
                        </div>
                        <p>{{ substr(($item->seller_description), 0, 332) . '...' }}</p>

                        <ul class="list1">
                            <li><a href="#">Registered {{ $item->year }}</a></li>
                            <li><a href="#">{{ $item->condition }}</a></li>
                            <li><a href="#">{{ $item->city }}</a></li>
                            <li><a href="#">Petrol</a></li>
                        </ul>

                        <div class="txt5">31,730 KM</div>
                        <div class="caption-footer">
                            <div class="info2">
                                <div class="txt6">$68,213</div>
                            </div>
                            <div class="info3">
                                <div class="txt7"><a href="details.html" class="btn-default btn3">VIEW DETAILS</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Pagination --}}
    @include('inc.partials.search.pagination')
</div>