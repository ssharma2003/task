    <!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Campus Life</title>
@include('common.style')
</head>
<body>
    @include('common.metatags')
@include('common.preloader')
@include('common.header')
<div class="body-overlay"></div>
    <main>

        <!-- campus breadcrumb start -->
        <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
            <div class="tp-breadcrumb__bg overlay" data-background="assets/img/breadcrumb/campus-breadcrumb.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list inner-after">
                     <span class="white"><a href="index.html"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                     </svg></a></span>
                                <span class="white">Campus Life</span>
                            </div>
                            <h3 class="tp-breadcrumb__title color">Campus Life</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- campus breadcrumb end -->


        <!-- campus choose area start -->
        <section class="tp-campus-choose-area pt-120 pb-90 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-campus-choose-wrapper text-center">
                            <div class="tp-campus-choose-btn wow fadeInUp" data-wow-delay=".3s">
                                <p>Campus Life</p>
                                <a href="#down">

                                </a>
                            </div>
                            <div class="tp-campus-choose-content mb-10 wow fadeInUp" data-wow-delay=".5s">
                                <h2 class="tp-campus-choose-title">
                                    Experience vibrant campus life at KMCH
                                    College of Nursing with world-class facilities,
                                    supportive faculty, and enriching
                                    extracurricular activities.
                                </h2>
                                <a class="tp-btn" href="">Follow us on Instagram</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-campus-choose-thumb text-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                            <img src="assets/img/campus/campus/Follow-us-on-Insta-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="tp-campus-choose-thumb-main text-center pt-100 mb-30 wow fadeInUp" data-wow-delay=".5s">
                            <img src="assets/img/campus/campus/Follow-us-on-Insta-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-campus-choose-thumb text-center mb-30 wow fadeInUp" data-wow-delay=".7s">
                            <img src="assets/img/campus/campus/Follow-us-on-Insta-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- campus choose area end -->


        <!-- campus counter area start -->
        <section class="tp-campus-counter-area grey-bg pb-120">
            <div class="tp-campus-counter-bg" data-background="assets/img/campus/campus/counter-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-campus-counter-item counter-border text-center">
                                <h3 class="tp-counter-count mb-10">
                                    <span data-purecounter-duration="1" data-purecounter-end="7"  class="purecounter">7</span>
                                </h3>
                                <p>Student Nationalities</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-campus-counter-item counter-border text-center">
                                <h3 class="tp-counter-count mb-10">
                                    <span data-purecounter-duration="1" data-purecounter-end="67"  class="purecounter">67</span>%
                                </h3>
                                <p>Other State Students</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-campus-counter-item text-center">
                                <h3 class="tp-counter-count mb-10">
                                    <span data-purecounter-duration="1" data-purecounter-end="25"  class="purecounter">25</span>+
                                </h3>
                                <p>Different Majors</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- campus counter area end -->


        <!-- campus student area start -->
        <section class="tp-campus-student-area grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="down" class="tp-campus-student-box pb-100 wow fadeInUp" data-wow-delay=".3s">
                            <div class="tp-campus-student-heading text-center">
                                <h3 class="tp-campus-student-title">Student Life</h3>
                                <p>Dynamic student life with learning, growth, and diverse opportunities.</p>
                            </div>
                            <div class="tp-campus-student-content">
                                <div class="tab-content" id="myTabContent">


                                    <div class="tab-pane fade show active" id="hostel" role="tabpanel" aria-labelledby="hostel-tab">
                                        <div class="tp-campus-student-wrap p-relative">
                                            <div class="tp-campus-student-thumb">
                                                <img src="assets/img/campus/campus/Hostel.jpg" alt="">
                                            </div>
                                            <div class="tp-campus-student-item">
                                                <h4 class="tp-campus-student-item-title">Hostel and Dining</h4>
                                                <p>Comfortable hostels and nutritious dining ensure a safe and homely environment for students.</p>
                                                <div class="tp-campus-student-item-thumb">
                                                    <img src="assets/img/campus/campus/Dining.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="student" role="tabpanel" aria-labelledby="student-tab">
                                        <div class="tp-campus-student-wrap p-relative">
                                            <div class="tp-campus-student-thumb">
                                                <img src="assets/img/campus/campus/Student-Clubs-1.jpg" alt="">
                                            </div>
                                            <div class="tp-campus-student-item">
                                                <h4 class="tp-campus-student-item-title">Student Clubs</h4>
                                                <p>Engage in various student-led clubs fostering creativity, leadership, and personal growth beyond academics.</p>
                                                <div class="tp-campus-student-item-thumb">
                                                    <img src="assets/img/campus/campus/Student-Clubs-2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="lab" role="tabpanel" aria-labelledby="lab-tab">
                                        <div class="tp-campus-student-wrap p-relative">
                                            <div class="tp-campus-student-thumb">
                                                <img src="assets/img/campus/campus/Lab-Facilities-1.jpg" alt="">
                                            </div>
                                            <div class="tp-campus-student-item">
                                                <h4 class="tp-campus-student-item-title">Lab Facilities</h4>
                                                <p>Advanced nursing labs provide hands-on training to enhance practical skills and clinical expertise.</p>
                                                <div class="tp-campus-student-item-thumb">
                                                    <img src="assets/img/campus/campus/Lab-Facilities-2.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="cultural" role="tabpanel" aria-labelledby="cultural-tab">
                                        <div class="tp-campus-student-wrap p-relative">
                                            <div class="tp-campus-student-thumb">
                                                <img src="assets/img/campus/campus/Cultural-and-Sports-Activities-1.jpg" alt="">
                                            </div>
                                            <div class="tp-campus-student-item">
                                                <h4 class="tp-campus-student-item-title">Cultural and Sports Activities</h4>
                                                <p>Participate in vibrant cultural events and sports programs promoting fitness, teamwork, and holistic development</p>
                                                <div class="tp-campus-student-item-thumb">
                                                    <img src="assets/img/campus/campus/Cultural-and-Sports-Activities-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tp-campus-student-list">
                                <ul class="nav nav-tabs " id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="hostel-tab" data-bs-toggle="tab" data-bs-target="#hostel" type="button" role="tab" aria-controls="hostel" aria-selected="true">Hostel and Dining</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="student-tab" data-bs-toggle="tab" data-bs-target="#student" type="button" role="tab" aria-controls="student" aria-selected="false">Student Clubs</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="lab-tab" data-bs-toggle="tab" data-bs-target="#lab" type="button" role="tab" aria-controls="lab" aria-selected="false">Lab Facilities</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="cultural-tab" data-bs-toggle="tab" data-bs-target="#cultural" type="button" role="tab" aria-controls="Moscow" aria-selected="false">Cultural and Sports Activities</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- campus studetn area end -->


        <!-- campus activity area start -->
        <section class="tp-campus-activity-area grey-bg pt-80 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-campus-activity-heading mb-70">
                            <h3 class="tp-campus-activity-title">Explore Beyond Books: Fitness, Sports,
                                Clubs, and Enriching Student Activities Await</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-campus-activity-content wow fadeInUp" data-wow-delay=".3s">
                            <h4 class="tp-campus-activity-list-title"><span><img src="assets/img/campus/campus/Athletics_Fitness.svg" alt=""></span> Athletics & Fitness</h4>
                            <div class="tp-campus-activity-list">
                                <ul>
                                    <li><a href="#">Gymnasium <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Sports <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Yoga <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Tournaments <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-campus-activity-content wow fadeInUp" data-wow-delay=".5s">
                            <h4 class="tp-campus-activity-list-title"><span><img src="assets/img/campus/campus/Student_Clubs.svg" alt=""></span> Student Clubs</h4>
                            <div class="tp-campus-activity-list">
                                <ul>
                                    <li><a href="#">Arts <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Leadership <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Environment <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Technology <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-campus-activity-content wow fadeInUp" data-wow-delay=".7s">
                            <h4 class="tp-campus-activity-list-title"><span><img src="assets/img/campus/campus/Student_Activities.svg" alt=""></span> Student Activities</h4>
                            <div class="tp-campus-activity-list">
                                <ul>
                                    <li><a href="#">Outreach <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Festivals <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Workshops <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                    <li><a href="#">Adventures <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                              <path d="M1 9L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M1 1H9V9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- campus activity area end -->


        <!-- campus video area start -->
        <div class="tp-video-5-area tp-video-hover tp-video-inner-bg" data-background="assets/img/campus/campus/Video-thumbnail.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="tp-video-5-btn tp-video-button">
                            <a class="popup-video" href="https://vimeo.com/554609715" data-type="iframe">
                     <span class="tp-m-play-inner campus">
                        <svg class="tp-circle-svg" xmlns="http://www.w3.org/2000/svg" width="152" height="152" viewBox="0 0 152 152">
                           <path id="tp-cicle-path-934" fill="#FFFFFF" d="M18,76a58,58,0,1,1,58,58A58,58,0,0,1,18,76"></path>
                             <text class="tp-circle-text">
                                 <textPath xlink:href="#tp-cicle-path-934">STOP WISHING • START DOING</textPath>
                             </text>
                        </svg>
                        <svg class="tp-svg--play" xmlns="http://www.w3.org/2000/svg" width="18" height="22" viewBox="0 0 18 22" fill="none">
                           <path d="M1 1L16.5556 11L1 21V1Z" fill="#010F1C" stroke="#161613" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                         </svg>
                        </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- campus video area end -->


        <!-- campus life area start -->
        <section class="tp-campus-life-area p-relative grey-bg pb-210">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-campus-life-title-wrap text-center wow fadeInUp" data-wow-delay=".3s">
                            <div class="tp-campus-choose-btn">
                                <p>Life at KMCH College of Nursing</p>
                                <a href="#down2"><span>
                           <svg width="20" height="80" viewBox="0 0 20 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.0001 0.00111022L10.115 80.0071" stroke="currentColor" stroke-miterlimit="10"/>
                              <path d="M20 70C14.4726 70 9.99998 74.4726 9.99998 79.9999" stroke="currentColor" stroke-miterlimit="10"/>
                              <path d="M10 80C10 74.4727 5.52736 70.0001 -1.96429e-05 70.0001" stroke="currentColor" stroke-miterlimit="10"/>
                           </svg>
                        </span></a>
                            </div>
                            <h3 class="tp-campus-life-title">United, we thrive in knowledge,
                                strength, spirit, and integrity.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid gx-0 fix">
                <div class="row justify-content-center gx-0">
                    <div class="col-lg-12">
                        <div id="down2" class="tp-campus-life-slider p-relative">
                            <div class="swiper tp-campus-life-active">
                                <div class="swiper-wrapper align-items-center">

                                    <div class="swiper-slide">
                                        <div class="tp-campus-life-thumb text-center">
                                            <img src="assets/img/campus/campus/Image-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tp-campus-life-thumb text-center">
                                            <img src="assets/img/campus/campus/Image-2.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tp-campus-life-thumb text-center">
                                            <img src="assets/img/campus/campus/Image-3.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tp-campus-life-thumb text-center">
                                            <img src="assets/img/campus/campus/Image-4.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tp-campus-life-thumb text-center">
                                            <img src="assets/img/campus/campus/Image-5.jpg" alt="">
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tp-campus-life-thumb text-center">
                                            <img src="assets/img/campus/campus/Image-6.jpg" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-campus-life-arrow">
                <div class="tp-campus-prev">
               <span>
                  <svg width="34" height="18" viewBox="0 0 34 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M33 9H0.999999" stroke="currentCOlor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M9 1L1 9L9 17" stroke="currentCOlor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </span>
                </div>
                <div class="tp-campus-next">
               <span>
                  <svg width="34" height="18" viewBox="0 0 34 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 9H33" stroke="currentCOlor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M25 1L33 9L25 17" stroke="currentCOlor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
               </span>
                </div>
            </div>
        </section>
        <!-- campus life area end -->
    </main>

    @include('common.footer')
@include('common.script')

</body>
</html>