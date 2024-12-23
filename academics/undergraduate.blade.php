<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Nursing College in Coimbatore | KMCH</title>
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
                            <span class="white">Programmes</span>
                        </div>
                        <h3 class="tp-breadcrumb__title color">Undergraduate Programmes</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- admission breadcrumb end -->
<section class="program-area mt-4 mb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="tp-program-wrap wow fadeInUp" data-wow-delay=".3s">
                    <div class="tp-section text-center mb-55">
                        <h3 class="tp-section-title"><span> Undergraduate</span> Programmes</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="row align-items-center justify-content-center">

{{--Course list--}}
            <div class="col-lg-4">
                <div class="tp-program wow fadeInUp" data-wow-delay=".6s">
                    <div class="">
                        <div class="tp-program-item grey-bg mb-50">
                            <div class="tp-program-thumb fix">
                                <a href="{{route('academics.undergraduate.bsc-nursing')}}">
                                    <img src="/assets/img/program/bsc_nursing.png" alt="program-thumb"></a>
                            </div>
                            <div class="tp-program-content">
                                <h3 class="tp-program-title"><a href="{{route('academics.undergraduate.bsc-nursing')}}">B.Sc. Nursing</a></h3>
                                <p>Foundational nursing education program providing comprehensive training for aspiring healthcare professionals.</p>
                            </div>
                            <div class="tp-program-btn">
                                <a href="{{route('academics.undergraduate.bsc-nursing')}}">View detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="tp-program wow fadeInUp" data-wow-delay=".6s">
                    <div class="">
                        <div class="tp-program-item grey-bg mb-50">
                            <div class="tp-program-thumb fix">
                                <a href="{{route('academics.undergraduate.bsc-nursing')}}">
                                    <img src="/assets/img/program/post_bsc_nursing.png" alt="program-thumb"></a>
                            </div>
                            <div class="tp-program-content">
                                <h3 class="tp-program-title"><a href="{{route('academics.undergraduate.bsc-nursing')}}">Post Basic B.Sc. Nursing</a></h3>
                                <p>Advanced program catering to trained nurses, offering specialized education to enhance clinical expertise.</p>
                            </div>
                            <div class="tp-program-btn">
                                <a href="{{route('academics.undergraduate.post_basics_nursing')}}">View detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--Course list ends--}}


        </div>
    </div>
</section>
<!-- program-area-end -->
</main>
@include('common.footer')
@include('common.script')

</body>
</html>