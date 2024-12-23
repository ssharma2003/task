<!-- header-area-start -->
<header class="header-area tp-header-transparent p-relative">
    <div class="tp-header-top theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-heder-info d-flex justify-content-center justify-content-lg-start align-items-center">
                        <div class="tp-header-info-item d-none d-md-block">
                            <span><a href="#"><i class="fa-brands fa-facebook-f"></i></a>7500k Followers</span>
                        </div>
                        <div class="tp-header-info-item">
                           <span>
                              <a href="tel:0123456789"><i><img src="/assets/img/icon/calling.svg" alt="phone-img"></i> +(402) 763 282 46</a>
                           </span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-none d-lg-block">
                    <div class="tp-header-right-list d-flex justify-content-md-end">
                        <a href="#">Campus</a>
                        <a href="#">Students</a>
                        <a href="#"> Staffs</a>
                        <a href="#"> Alumni </a>
                        <a href="#">Help Desk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="tp-header-mob-space tp-header-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-6 col-6">
                    <div class="tp-header-logo-1 tp-header-logo">
                        <a href="{{route('landing')}}">
                            <img class="logo-1" src="/assets/img/logo/logo_kmch_nursing.png" alt="logo">
                            <img class="logo-2" src="/assets/img/logo/logo_kmch_nursing.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 d-none d-xl-block">
                    <div class="main-menu text-end">
                        <nav class="tp-main-menu-content">
                            <ul>
                                <li class="tp-static">
                                    <a class="tp-static" href="{{route('landing')}}">Home</a>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">About</a>
                                    <ul class="tp-submenu">
                                        <li><a href="{{route('about')}}">About Institute</a></li>
                                        <li><a href="">About Trust</a></li>
                                    </ul>
                                </li>
                                <li class="tp-static">
                                    <a class="tp-static" href="">Academics</a>
                                </li>
                                <li class="tp-static">
                                    <a class="tp-static" href="">Explore</a>
                                </li>
                                <li class="tp-static">
                                    <a class="tp-static" href="">Realtime Training</a>
                                </li>
                                <li class="tp-static">
                                    <a class="tp-static" href="">Activities</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-3 col-lg-6 col-md-6 col-6">
                    <div class="tp-header-contact d-flex align-items-center justify-content-end">
                        <div class="tp-header-btn d-none d-md-block ml-30">
                            <a href="">Apply Now </a>
                        </div>
                        <div class="tp-header-bar d-xl-none ml-30">
                            <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->

@include('common.offcanvas')