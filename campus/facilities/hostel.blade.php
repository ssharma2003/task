    <!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Hostel</title>
@include('common.style')
</head>
<body>
    @include('common.metatags')
@include('common.preloader')
@include('common.header')
<div class="body-overlay"></div>
    <main>

        <!-- admission breadcrumb start -->
        <section class="tp-breadcrumb__area pt-160 pb-150 p-relative z-index-1 fix">
            <div class="tp-breadcrumb__bg overlay" data-background="/assets/img/breadcrumb/campus-breadcrumb.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list inner-after">
                     <span class="white"><a href="index.html"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                     </svg></a></span>
                                <span class="white">Facilities</span>
                            </div>
                            <h3 class="tp-breadcrumb__title color">Hostel</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission breadcrumb end -->


        <!-- campus choose area start -->
        <section class="tp-campus-choose-area pt-120 pb-30 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-campus-choose-wrapper text-center">
                            <div class="tp-campus-choose-btn wow fadeInUp" data-wow-delay=".3s">
                                <p>Hostel</p>
                                <a href="#down">

                                </a>
                            </div>
                            <div class="tp-campus-choose-content mb-10 wow fadeInUp" data-wow-delay=".5s">
                                <h2 class="tp-campus-choose-title">
                                    Countless opportunities to connect, learn,
                                    and grow.
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- campus choose area end -->


        <!-- admission counter area start -->
        <section id="down" class="tp-admission-counter-area grey-bg pb-120">
            <div class="container">
                <div class="tp-admission-counter-box wow fadeInUp" data-wow-delay=".3s">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-admission-counter-item">
                                <h3 class="tp-admission-counter-title">
                                    <span data-purecounter-duration="4" data-purecounter-end="45" class="purecounter">45</span>+
                                </h3>
                                <p class="after">Undergraduate, Postgraduate, <br> and Diploma Programs</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-admission-counter-item pl-50">
                                <h3 class="tp-admission-counter-title">
                                    <span data-purecounter-duration="3" data-purecounter-end="82" class="purecounter">82</span>%
                                </h3>
                                <p class="after">of students have been placed <br> in healthcare brands worldwide.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-admission-counter-item pl-80">
                                <h3 class="tp-admission-counter-title">
                                    <span data-purecounter-duration="3" data-purecounter-end="90" class="purecounter">90</span>%
                                </h3>
                                <p>of students secure internships <br> by their 2nd year of study.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- admission counter area end -->


        <!-- admission area start -->
        <section class="tp-admission-overview-area grey-bg pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-admission-overview-heading wow fadeInUp" data-wow-delay=".3s">
                            <h3 class="tp-admission-overview-title">
                                Comfort Haven
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-admission-overview-wrapper wow fadeInUp" data-wow-delay=".5s">
                            <p>Our hostels provide a secure and welcoming
                                environment with well-furnished rooms, hygienic dining
                                facilities, and 24/7 security. Designed for convenience
                                and comfort, the hostels foster academic focus,
                                personal growth, and a sense of community.</p>
                            <p>
                                With amenities like recreational spaces, high-speed
                                internet, and round-the-clock support, students can
                                thrive in a home-away-from-home atmosphere,
                                ensuring a fulfilling and balanced campus life
                                experience.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission area end -->





        <!-- admission cta area start -->
        <section class="tp-admission-cta-area grey-bg pb-160">
            <div class="container">
                <div class="tp-admission-cta-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tp-admission-cta-heading wow fadeInUp" data-wow-delay=".3s">
                                <h3 class="tp-admission-cta-title">You’re stepping into a
                                    vibrant student life!</h3>
                                <p>Our housing options provide the
                                    perfect starting point for you to dive
                                    into the dynamic campus experience
                                    and make the most of your time with
                                    us.</p>
                                <div class="tp-admission-cta-btn">
                                    <a class="tp-btn" href="">Apply now <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                              <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-admission-cta-thumb wow fadeInUp" data-wow-delay=".5s">
                                <img src="/assets/img/course/details/admisson-overview-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission cta area end -->


        <section class="grey-bg pb-15">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="tp-program-wrap wow fadeInUp" data-wow-delay=".3s">
                            <div class="tp-section text-center mb-55">
                                <h3 class="tp-section-title">Frequently asked Questions</h3>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="container my-5">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-10">
                            <div class="tp-faq-box">
                                <div class="tpd-accordion">
                                    <div class="accordion" id="accordionExample">
                                        <!-- Accordion Item 1 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseHousing" aria-expanded="false" aria-controls="flush-collapseHousing">
                                                    How do I apply for on-campus housing at KMCH College of Nursing?
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseHousing" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    To apply for on-campus housing at KMCH College of Nursing, students can access the housing application through the college’s official website or housing portal. Follow the instructions provided to complete the application, including providing necessary personal and contact information.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Accordion Item 2 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseAmenities" aria-expanded="false" aria-controls="flush-collapseAmenities">
                                                    What amenities are included in the accommodation facilities at KMCH College of Nursing?
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseAmenities" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Accommodation facilities at KMCH College of Nursing offer a range of amenities tailored to students’ needs. These may include furnished living spaces, access to common areas, laundry facilities, high-speed internet, study areas, recreational spaces, and security features such as key card access or security personnel.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Accordion Item 3 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRoommate" aria-expanded="false" aria-controls="flush-collapseRoommate">
                                                    Can I choose my roommate or request specific accommodations at KMCH College of Nursing?
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseRoommate" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    KMCH College of Nursing provides options for students to choose roommates through roommate matching services. Fill out the necessary forms or contact the housing office for assistance with roommate requests or specific accommodation needs.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTransportation" aria-expanded="false" aria-controls="flush-collapseTransportation">
                                                    What transportation options are available for students living on campus at KMCH College of Nursing?
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTransportation" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Transportation options for students at KMCH College of Nursing may include shuttle services provided by the college, public transportation stops within walking distance, and designated parking for students who own vehicles. Contact the college’s transportation department or student services for more information on available transportation options.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Accordion Item 2 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMail" aria-expanded="false" aria-controls="flush-collapseMail">
                                                    How is mail and package delivery handled for students living on campus at KMCH College of Nursing?
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseMail" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Students living on campus at KMCH College of Nursing receive a designated mailing address for their accommodation. Mail and packages are delivered to a centralized mailroom or package center where students can pick them up. Additional services such as package tracking or email notifications may be available through the college’s mail services.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Accordion Item 3 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOffCampus" aria-expanded="false" aria-controls="flush-collapseOffCampus">
                                                    What options are available for students who wish to live off-campus while attending KMCH College of Nursing?
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOffCampus" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Contact the college’s housing office or student services department for assistance with off-campus housing inquiries.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div>

                        </div>



                </div>
            </div>
        </section>

        <!-- admission apply area start -->
        <section class="tp-admission-apply-area grey-bg pt-40 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-admission-apply-thumb p-relative wow fadeInUp" data-wow-delay=".3s">
                            <img src="/assets/img/course/details/admisson-overview-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-admission-apply-heading wow fadeInUp" data-wow-delay=".5s">
                            <h3 class="tp-admission-apply-title">Apply for 2025</h3>
                            <p>Shape your future in healthcare! Apply now for 2025
                                admissions at KMCH College of Nursing. Limited seats
                                available.</p>
                            <div class="tp-admission-apply-btn">
                                <a class="tp-btn" href="#">Apply now
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                              <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission apply area end -->
    </main>
@include('common.footer')
@include('common.script')

</body>
</html>