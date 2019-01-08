<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li style="display: {{ Auth::user()->level != 'seller' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">My requests</span></a></li>
                <li style="display: {{ Auth::user()->level == 'seller' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard.home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
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
                <li style="display: {{ Auth::user()->level == 'admin' ? 'none' : 'initial' }}" class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fab fa-chrome"></i><span class="hide-menu">Manage Website </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li style="display: {{ Auth::user()->level != 'admin' ? 'none' : 'initial' }}" class="sidebar-item"><a href="{{ route('website_content.index') }}" class="sidebar-link"><i class="fas fa-home"></i><span class="hide-menu"> Home Page </span></a></li>
                        <li class="sidebar-item"><a href="{{ route('website_content.testimonials') }}" class="sidebar-link"><i class="fas fa-comments"></i><span class="hide-menu"> Testimonials </span></a></li>
                        <li style="display: {{ Auth::user()->level != 'admin' ? 'none' : 'initial' }}" class="sidebar-item"><a href="{{ route('website_content.tos') }}" class="sidebar-link"><i class=" fas fa-dollar-sign"></i><span class="hide-menu"> TOS </span></a></li>
                        <li style="display: {{ Auth::user()->level != 'admin' ? 'none' : 'initial' }}" class="sidebar-item"><a href="{{ route('website_content.contact') }}" class="sidebar-link"><i class=" fas fa-phone"></i><span class="hide-menu"> Contact </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i><span class="hide-menu">Financial </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="fas fa-edit"></i><span class="hide-menu"> Generate Reports </span></a></li>
                        <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="far fa-share-square"></i><span class="hide-menu"> Update Rates </span></a></li>
                     </ul>
                </li>

               {{-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="widgets.html" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i><span class="hide-menu">Listings</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-chart-timeline"></i><span class="hide-menu">History</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="grid.html" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="hide-menu">Financial</span></a></li>
                {{-- <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="form-basic.html" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span></a></li>
                        <li class="sidebar-item"><a href="form-wizard.html" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-buttons.html" aria-expanded="false"><i class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="icon-material.html" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span></a></li>
                        <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu"> Font Awesome Icons </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pages-elements.html" aria-expanded="false"><i class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="index2.html" class="sidebar-link"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span></a></li>
                        <li class="sidebar-item"><a href="pages-gallery.html" class="sidebar-link"><i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span></a></li>
                        <li class="sidebar-item"><a href="pages-calendar.html" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>
                        <li class="sidebar-item"><a href="pages-invoice.html" class="sidebar-link"><i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span></a></li>
                        <li class="sidebar-item"><a href="pages-chat.html" class="sidebar-link"><i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="authentication-login.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Login </span></a></li>
                        <li class="sidebar-item"><a href="authentication-register.html" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span></a></li>
                        <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span></a></li>
                        <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span></a></li>
                        <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span></a></li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
