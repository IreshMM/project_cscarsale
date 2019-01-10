<div id="tabs2-1">
    <div class="product-list-classic">
        @php
            $i = 1;
        @endphp
        {{-- List starts here --}} 
        @foreach ($listings as $item)
            @php
                $image = $item->getImages("322X230")[0];
            @endphp
            <div class="product-box-horizontal">
                <div class="product-box-inner">
                    <figure><a href="{{ route('details', ['id' => $item->id_car_listing]) }}"><img src="{{ $image }}" alt="" class="img-responsive"></a></figure>
                    <div class="caption">
                        <div class="caption-header">
                            <div class="info1">
                                <div class="txt1"><a href="{{ route('details', ['id' => $item->id_car_listing]) }}">{{ $item->model()->first()->name . ' | ' . $item->color . ' | ' . $item->city }}</a></div>
                                <div class="txt2"><span class="txt">FIRST DRIVE REVIEW</span> <span class="stars">                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star novi-icon" aria-hidden="true"></i>                           <i class="fa fa-star-o novi-icon" aria-hidden="true"></i>                         </span>
                                </div>
                            </div>
                            <div class="info2">
                            <div class="txt3">Rs. {{ $item->selling_price }}</div>
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
                            <div class="txt7"><a href="{{ route('details', ['id' => $item->id_car_listing]) }}" class="btn-default btn3">VIEW DETAILS</a></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- Pagination --}}
    @include('website.inc.partials.search.pagination')
</div>