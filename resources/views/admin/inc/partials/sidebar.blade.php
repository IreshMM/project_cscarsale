<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li style="display: {{ Auth::user()->level != 'seller' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('seller.dashboard') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">My requests</span></a></li>
                {{-- <li style="display: {{ Auth::user()->level == 'seller' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li> --}}
                <li style="display: {{ Auth::user()->level == 'seller' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-car"></i><span class="hide-menu">Manage Vehicles </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('car_listing.index') }}" class="sidebar-link"><i class="fas fa-check"></i><span class="hide-menu"> Available Vehicles </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('seller_request.index') }}" class="sidebar-link"><i class="far fa-share-square"></i><span class="hide-menu"> Seller Requests </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('resource.sold_car_list') }}" class="sidebar-link"><i class=" fas fa-dollar-sign"></i><span class="hide-menu"> Sold vehicles </span></a></li>
                    </ul>
                </li>
                <li style="display: {{ Auth::user()->level != 'admin' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class=" fas fa-users"></i><span class="hide-menu">Manage Users </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('seller.index') }}" class="sidebar-link"><i class="fas fa-user-secret"></i><span class="hide-menu"> Sellers </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('employee.index') }}" class="sidebar-link"><i class="fas fa-user"></i><span class="hide-menu"> Employees </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('subscription.index') }}" class="sidebar-link"><i class="fas fa-envelope-square"></i><span class="hide-menu"> Subscription </span></a></li>
                    </ul>
                </li>
                <li style="display: {{ Auth::user()->level == 'seller' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-chrome"></i><span class="hide-menu">Manage Website </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li style="display: {{ Auth::user()->level != 'admin' ? 'none' : 'initial' }}" class="sidebar-item"><a href="{{ route('website_content.index') }}" class="sidebar-link"><i class="fas fa-home"></i><span class="hide-menu"> Home Page </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('website_content.testimonials') }}" class="sidebar-link"><i class="fas fa-comments"></i><span class="hide-menu"> Testimonials </span></a></li>
                        <li style="display: {{ Auth::user()->level != 'admin' ? 'none' : 'initial' }}" class="sidebar-item"><a href="{{ route('website_content.tos') }}" class="sidebar-link"><i class=" fas fa-dollar-sign"></i><span class="hide-menu"> TOS </span></a></li>
                        <li style="display: {{ Auth::user()->level != 'admin' ? 'none' : 'initial' }}" class="sidebar-item"><a href="{{ route('website_content.contact') }}" class="sidebar-link"><i class=" fas fa-phone"></i><span class="hide-menu"> Contact </span></a></li>
                    </ul>
                </li>
                <li style="display: {{ Auth::user()->level == 'seller' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i><span class="hide-menu">Financial </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('dashboard.reports') }}" class="sidebar-link"><i class="fas fa-edit"></i><span class="hide-menu"> Generate Reports </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="far fa-share-square"></i><span class="hide-menu"> Update Rates </span></a></li>
                     </ul>
                </li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
