    <!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>About</title>
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
            <div class="tp-breadcrumb__bg overlay" data-background="assets/img/breadcrumb/campus-breadcrumb.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="tp-breadcrumb__content">
                            <div class="tp-breadcrumb__list inner-after">
                     <span class="white"><a href="index.html"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                     </svg></a></span>
                                <span class="white">About</span>
                            </div>
                            <h3 class="tp-breadcrumb__title color">About us</h3>
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
                            <div class="tp-campus-choose-btn admission wow fadeInUp" data-wow-delay=".3s">
                                <div class="tp-campus-choose-content mb-10 wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="tp-campus-choose-title fs-50">At KMCH College of Nursing, we foster
                                        compassionate caregivers and future leaders
                                        through immersive clinical training and
                                        holistic education.</h2>
                                </div>
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
                                Nursing Excellence
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-admission-overview-wrapper wow fadeInUp" data-wow-delay=".5s">
                            <p>Established in 1993, KMCH College of Nursing is a premier
                                institution in Coimbatore, Tamil Nadu, affiliated with The Tamil
                                Nadu Dr. M.G.R. Medical University. Backed by Kovai Medical
                                Center and Hospital, a 1,000-bed multidisciplinary superspecialty
                                facility, the college offers UG, PG, and doctoral
                                programs in nursing.</p>
                            <p>With a strong focus on academic excellence, clinical exposure,
                                and holistic development, KMCH prepares competent,
                                compassionate professionals for a successful career in global
                                healthcare.</p>
                            <div class="tp-admission-overview-btn mt-50">
                                <a class="tp-btn" href="university-financial.html">Learn more <br>
                                    About financial aid <span><svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                              <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission area end -->


        <section class="grey-bg pb-15">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="tp-program-wrap wow fadeInUp" data-wow-delay=".3s">
                            <div class="tp-section text-center mb-55">
                                <h3 class="tp-section-title"><span>Affiliations</span> and Recognitions</h3>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="container my-5">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <img src="/assets/img/about/affiliations/The-Government-of-Tamil-Nadu.png" alt="Government of Tamil Nadu" class="img-fluid mb-2" style="max-width: 150px;">
                            <h5 class="mt-2">Government of <br>Tamil Nadu</h5>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <img src="/assets/img/about/affiliations/The-Tamil-Nadu-Dr.M.G.R-Medical-University-Chennai.png" alt="Tamil Nadu Dr. M.G.R Medical University, Chennai" class="img-fluid mb-2" style="max-width: 150px;">
                            <h5 class="mt-2">Tamil Nadu Dr. M.G.R Medical University, Chennai</h5>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <img src="/assets/img/about/affiliations/Tamil-Nadu-Nurses-and-Midwives-Council-Chennai.png" alt="Tamil Nadu Nurses and Midwives Council, Chennai" class="img-fluid mb-2" style="max-width: 150px;">
                            <h5 class="mt-2">Tamil Nadu Nurses and Midwives Council, Chennai</h5>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <img src="/assets/img/about/affiliations/Indian-Nursing-Council-New-Delhi-.png" alt="Indian Nursing Council, New Delhi" class="img-fluid mb-2" style="max-width: 150px;">
                            <h5 class="mt-2">Indian Nursing Council,<br> New Delhi</h5>
                        </div>
                    </div>
                </div>


            </div>
        </section>



        <section class="grey-bg pb-15">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="tp-program-wrap wow fadeInUp" data-wow-delay=".3s">
                            <div class="tp-section text-center mb-55">
                                <h3 class="tp-section-title">Shaping future leaders in healthcare</h3>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="container my-5">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-lg-10">
                            <div class="tp-faq-box">
                                <div class="tpd-accordion">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <!-- Mission -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMission" aria-expanded="false" aria-controls="flush-collapseMission">
                                                    Mission
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseMission" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Mission of KMCH College of Nursing is to nurture world-class Nursing professionals through innovation in teaching, learning and research, clinical excellence with a commitment to quality care.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Vision -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseVision" aria-expanded="false" aria-controls="flush-collapseVision">
                                                    Vision
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseVision" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                    KMCH College of Nursing strives to be a leader in Nursing Education, shaping the future of health care by nurturing competent and empathetic nursing Professionals.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Purpose -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePurpose" aria-expanded="false" aria-controls="flush-collapsePurpose">
                                                    Purpose
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapsePurpose" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                    <ul>
                                                        <li>To offer Graduate and Postgraduate Nursing Programmes of high academic excellence so as to meet the shortage of qualified nurses locally and globally.</li>
                                                        <li>To facilitate continuous growth and all-round development of the students and faculty by providing a wide spectrum of curricular, co-curricular, and extra-curricular activities.</li>
                                                        <li>To kindle the spirit of inquiry in the minds of faculty and students and promote Research & Innovation in Nursing.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Motto -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMotto" aria-expanded="false" aria-controls="flush-collapseMotto">
                                                    Motto
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseMotto" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                    To serve with Competence & Loyalty.
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Core Values -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCoreValues" aria-expanded="false" aria-controls="flush-collapseCoreValues">
                                                    Core Values
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseCoreValues" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                    <ul>
                                                        <li>Compassion</li>
                                                        <li>Collaboration</li>
                                                        <li>Community welfare</li>
                                                        <li>Discipline</li>
                                                        <li>Excellence</li>
                                                        <li>Innovation</li>
                                                        <li>Diversity</li>
                                                    </ul>
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
        <!-- admission cta area start -->
        <section class="tp-admission-cta-area grey-bg pb-160">
            <div class="container">
                <div class="tp-admission-cta-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tp-admission-cta-heading wow fadeInUp" data-wow-delay=".3s">
                                <h3 class="tp-admission-cta-title">Calculate Your <br> Estimated Scholarship.</h3>
                                <p>How affordable is Harvard? See for yourself with our <br>
                                    Net Price Calculator.</p>
                                <div class="tp-admission-cta-btn">
                                    <a class="tp-btn" href="university-tuition-fees.html">Net Price Calculator <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12" fill="none">
                              <path d="M1 11L6 6L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-admission-cta-thumb wow fadeInUp" data-wow-delay=".5s">
                                <img src="assets/img/course/details/admisson-overview-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- admission cta area end -->


        <!-- admission apply area start -->
        <section class="tp-admission-apply-area grey-bg pt-40 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-admission-apply-thumb p-relative wow fadeInUp" data-wow-delay=".3s">
                            <img src="assets/img/course/details/admisson-overview-2.jpg" alt="">
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