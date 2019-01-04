<div class="section">
    <div class="top3-wrapper novi-background bg-cover">
        <div class="container">
            <div class="top3 clearfix">
                <div class="tabs-wrapper">
                    <div class="txt">SELECT VIEW</div>
                    <div class="tabs1-wrapper">
                        <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                            <li class="active"><a href="#tabs2-1"><i class="fa fa-list"></i></a></li>
                            <li><a href="#tabs2-2"><i class="fa fa-th"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="sort-wrapper">
                    <div class="txt">sort by</div>
                    <div class="select1_wrapper"><label>Sort</label>
                        <div class="select1_inner"><select class="select2 select" style="width: 100%">
                            <option value="1">Last Added</option>
                            <option value="2">Popular</option>
                            <option value="3">Price</option>
                        </select></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs1_wrapper novi-background">
        <div class="container">
            <div class="breadcrumbs1"><a href="index.html">Home</a><span></span>Search Results</div>
        </div>
    </div>
    <div class="content section-md-bottom novi-background bg-cover">
        <div class="container">
            <div class="row row-fix">
                
                <div class="col-sm-12 col-md-9 col-md-push-3 column-content">
                    <div id="first-tab-group" class="tabgroup">
                        @include('inc.partials.search.listview')
                        @include('inc.partials.search.gridview')
                    </div>
                </div>
                @include('inc.partials.search.searchform')
            </div>
        </div>
    </div>
</div>

