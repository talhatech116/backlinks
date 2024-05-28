<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logotopnav.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logonav.png') }}" alt="" height="35">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logotopnav.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logotopnav.png') }}" alt="" height="35">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

              
                <li class="nav-item">
                    <a class="nav-link menu-link" href="" >
                        <i class="ri-home-4-fill"></i> <span>Home</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/publisher/website')}}" >
                        <i class="ri-macbook-line"></i> <span>Website</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="" >
                        <i class="ri-pencil-fill"></i> <span>Writer</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="" >
                        <i class="ri-flight-takeoff-line"></i><span>Paysuites</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="" >
                        <i class="ri-gift-2-fill"></i> <span>Promotions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="" >
                        <i class="ri-user-fill"></i> <span>Affiliates</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ url('/sales')}}" >
                        <i class="ri-shopping-cart-2-fill"></i> <span>Sales</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="" >
                        <i class="ri-wallet-line"></i> <span>Wallet</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="" >
                        <i class="ri-information-fill"></i> <span>Contact</span>
                    </a>
                </li>


               

            </ul>
            </div>

            <!-- Sidebar -->
        </div>
        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

