<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>B.Sc. Nursing | KMCH</title>
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
                     <span class="white"><a href="/"><svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.07207 0C8.19331 0 8.31107 0.0404348 8.40664 0.114882L16.1539 6.14233L15.4847 6.98713L14.5385 6.25079V12.8994C14.538 13.1843 14.4243 13.4574 14.2225 13.6589C14.0206 13.8604 13.747 13.9738 13.4616 13.9743H2.69231C2.40688 13.9737 2.13329 13.8603 1.93146 13.6588C1.72962 13.4573 1.61597 13.1843 1.61539 12.8994V6.2459L0.669148 6.98235L0 6.1376L7.7375 0.114882C7.83308 0.0404348 7.95083 0 8.07207 0ZM8.07694 1.22084L2.69231 5.40777V12.8994H13.4616V5.41341L8.07694 1.22084Z" fill="currentColor"/>
                     </svg></a></span>
                            <span class="white">Undergraduate Programmes</span>
                        </div>
                        <h3 class="tp-breadcrumb__title color">B.Sc. Nursing</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- admission breadcrumb end -->
<section class="program-area mt-4 mb-75">
    <div class="container">
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-8">--}}
{{--                <div class="tp-program-wrap wow fadeInUp" data-wow-delay=".3s">--}}
{{--                    <div class="tp-section text-center mb-55">--}}
{{--                        <h3 class="tp-section-title"><span> Undergraduate</span> Programmes</h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row align-items-center justify-content-center">--}}
{{--            <div class="col-lg-12">--}}
{{--                --}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>

    <section class="tp-admission-cta-area pb-160">
        <div class="container">
            <div class="tp-admission-cta-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-admission-cta-heading wow fadeInUp" data-wow-delay=".3s">
                            <h3 class="tp-admission-cta-title">Overview</h3>
                            <p>The B.Sc. Nursing program at KMCH College of Nursing provides in-depth knowledge and clinical skills necessary for a successful nursing career.
                                Students receive extensive training in patient care, medical procedures, and healthcare management.</p>
                            <div class="tp-admission-cta-btn">
                                <a class="tp-btn" href="">Apply now<span>
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

    <section class="tp-admission-cta-area grey-bg pt-50 pb-50">
        <div class="container">
            <div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="tp-faq-box">
                            <div class="tpd-accordion">
                                <div class="accordion accordion-flush" id="accordionFlushDemo">
                                    <!-- Mission -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMission" aria-expanded="false" aria-controls="flush-collapseMission">
                                                What You’ll Learn
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
                                                Intake details
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
                                                Eligibility
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

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-10 pt-20 pb-20">
                        <h4>Admission Requirements</h4>
                    </div>

                    <div class="col-lg-10">
                        <div class="tp-faq-box">
                            <div class="tpd-accordion">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <!-- Mission -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMission3"
                                                    aria-expanded="false" aria-controls="flush-collapseMission3">
                                                Indian Students
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseMission3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Mission of KMCH College of Nursing is to nurture world-class Nursing professionals through innovation in teaching, learning and research, clinical excellence with a commitment to quality care.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMission2" aria-expanded="false" aria-controls="flush-collapseMission2">
                                                NRI Students
                                                <span class="accordion-btn"></span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseMission2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Mission of KMCH College of Nursing is to nurture world-class Nursing professionals through innovation in teaching, learning and research, clinical excellence with a commitment to quality care.
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row align-items-center justify-content-center">


                </div>


            </div>
        </div>
    </section>
<!-- program-area-end -->
</main>
@include('common.footer')
@include('common.script')

</body>
</html>