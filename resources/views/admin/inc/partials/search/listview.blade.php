<div id="tabs2-1">
    <div class="product-list-classic">

        {{-- List starts here --}} @foreach ($listings as $item)
        <div class="product-box-horizontal">
            <div class="product-box-inner">
                <figure><a href="details.html"><img src="images/listing-1-322x230.jpg" alt="" class="img-responsive"></a></figure>
                <div class="caption">
                    <div class="caption-header">
                        <div class="info1">
                            <div class="txt1"><a href="details.html">{{ $item->model()->first()->name }}</a></div>
                            <div class="txt2"><span class="txt">FIRST DRIVE REVIEW</span> <span class="stars">                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star-o novi-icon" aria-hidden="true"></i>                         </span>
                            </div>
                        </div>
                        <div class="info2">
                            <div class="txt3">$99,415</div>
                        </div>
                    </div>
                    <p style="text-overflow:ellipsis;"> {{ substr(($item->seller_description), 0, 332) . '...' }} </p>
                    <div class="caption-footer">
                        <div class="info3">
                            <div class="txt5">0 kM</div>
                            <ul class="tag-list">
                                <li><a href="#">Registered {{ $item->year }}</a></li>
                                <li><a href="#">{{ $item->condition }}</a></li>
                                <li><a href="#">{{ $item->city }}</a></li>
                                <li><a href="#">Petrol</a></li>
                            </ul>
                        </div>
                        <div class="txt7"><a href="details.html" class="btn-default btn3">VIEW DETAILS</a></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- Pagination --}}
    @include('inc.partials.search.pagination')
</div>