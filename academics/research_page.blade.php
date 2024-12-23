<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #ffffff;
        }
        .unique-header {
            font-size: 25px;
        }
</style>  
<head>
<title>Research</title>
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
                                <span class="white">Research</span> 
                            </div>
                            <h3 class="tp-breadcrumb__title color">Research & Development Council</h3>
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
                                    <h1 class="tp-campus-choose-title fs-50">The Research & Development Council at KMCH College of Nursing is dedicated to fostering a robust research environment and overseeing research projects within the institution. Our goal is to advance the research culture and streamline academic inquiries in nursing.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class='container'>
        <h1 class='unique_header' style='font-size:25px;'>Members of the Committee</h1> 
        <table> 
            <tr>
                <th>S No</th>
                <th>Name</th>
                <th>Designation</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Prof. Dr. S. Madhavi</td>
                <td>Principal, Chairperson</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Dr. S.P. Blessly Pramila</td>
                <td>Medical Surgical Nursing Department, Member Secretary</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Prof. Dr. Pavithra</td>
                <td>Department of Microbiology (Basic Medical Scientist), Member</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Dr. S. Kumar</td>
                <td>Assistant Professor of Biostatistics (Biostatistician), Member</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Prof. Dr. Malarvizhi Ravichandran</td>
                <td>Vice Principal & HOD, Paediatric Nursing, Member</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Prof. Mrs. S. Renuka</td>
                <td>HOD, Obstetrical and Gynaecology Nursing, Member</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Prof. Dr. R. Buvaneswari</td>
                <td>HOD, Psychiatric Nursing, Member</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Prof. M. Malarkodi</td>
                <td>Dept of Community Health Nursing, Member</td>
            </tr>
        </table>


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
                                                Member Functions of the Committee
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseMission" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                <ul>
                                                    <li>Screening the projects of M.Sc. Nursing, B. Sc. Nursing, and PBB. Sc. Nursing projects of KMCH.</li>
                                                    <li>Perusal and approval of research projects for ethical clearance.</li>
                                                    <li>Monitor the research activities carried out in KMCH College of Nursing.</li>
                                                    <li>Facilitating faculty members to conduct research projects and publish in journals.</li>
                                                    <li>For project approval, the concerned specialty head and more than 50% of the members must be present.</li>
                                                    <li>Frequency of the meeting: Once in 3 months.</li>
                                                </ul>
                                                    </div>
                                            </div>
                                        </div>

                                        <!-- Vision -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseVision" aria-expanded="false" aria-controls="flush-collapseVision">
                                                Ongoing Research
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseVision" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                <ul>
                                                    <li>Effect of nurse-led intervention package on clinical and behavioural outcome among pregnant women with oligohydramnios selected tertiary hospital, Coimbatore – Prof. Ms. Padma Midwifery and Obstetrical Nursing Department.</li>
                                                    <li>Effectiveness of Nurse-Led-Interventions on Bio-Psycho-Social aspects among students studying in selected school, Coimbatore, Tamil Nadu – Prof. Ms. Jamuna Rani Mental Health Nursing Department.</li>
                                                    <li>Assessing the effectiveness of mental health promotion bundle on mental health outcome among preadolescents with screen dependency – Ms. Devi Krishna, Mental Health Nursing Department.</li>
                                                    <li>Effect of centre and voice call based (CV – DSMC) Diabetes self Management Coaching on Clinical and Behavioral outcome among elderly People with type2 Diabetes Mellitus at RHTC KMCH, Coimbatore – Prof. Ms. Malarkodi Community Health Nursing Department.</li>
                                                    <li>Effectiveness of mobile based life style modification on self–care compliance, metabolic profile and quality of life patients following Percutaneous coronary intervention – Ms. Jeevitha.J.V., Prof. Dr. S. Madhavi. Principal, Medical Surgical Nursing Department.</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Purpose -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsePurpose" aria-expanded="false" aria-controls="flush-collapsePurpose">
                                                Research Conference
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapsePurpose" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                <ul>
                                                    <li>National Nursing Research Summit 2023: National Level Conference Theme: Navigating to Excellence in Nursing Research.</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Motto -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseMotto" aria-expanded="false" aria-controls="flush-collapseMotto">
                                                Publications
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseMotto" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                <ul>
                                                    <li>Effectiveness of techno based lifestyle modification intervention self care compliance control of blood pressure among patients with uncontrolled hypertension at KMCH – Mr. G. Venkatesan.</li>
                                                    <li>Relationship between emotional stress among the staff nurse at KMCH – Mr. G. Venkatesan.</li>
                                                    <li>A Study to Assess the Knowledge, Attitude and Risk Profile of Breast Cancer Among Women in Selected Communities at Coimbatore, Tamil Nadu, India – Prof. Dr. S. Madhavi, Prof. Sivagami Ramanathan, S. Uma Malini.</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Core Values -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCoreValues" aria-expanded="false" aria-controls="flush-collapseCoreValues">
                                                Conferences Organized
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseCoreValues" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                <ul>
                                                    <li>THE XXIXTH STATE SNA VIRTUAL TNAI (Trained Nurses Association of India) BIENNIAL CONFERENCE, TAMIL NADU BRANCH – hosted by KMCH College of Nursing on 05.01.2022 with 600 delegates participating.</li>
                                                    <li>“ADOLESCENT PSYCHIATRY: AN UPDATE” 2022 (PSYCHIATRIC NURSING) STATE LEVEL CONFERENCE – organized by Department of Mental Health Nursing, KMCHCON on 01.07.2022 with 531 registered delegates.</li>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button faq-expend collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseCoreValues" aria-expanded="false" aria-controls="flush-collapseCoreValues">
                                                Workshops
                                                    <span class="accordion-btn"></span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseCoreValues" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body text-start">
                                                <ul>
                                                    <li>Workshop on “Safe delivery competencies” conducted for B.Sc(N) – IV 96 students from Mar 28th to 30th 2022 organized by Department of OBG nursing, KMCH College of nursing.</li>
                                                    <li>Workshop on Ostomy Care Organized by Department of Medical Surgical Nursing, KMCH CON from 29th to 31st March 2022. III yr B.Sc(N) and PBBsc (N) – I, 120 students benefited.</li>
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
        <!-- campus choose area end -->


        <!-- admission counter area start -->
        
        <!-- admission counter area end -->


        <!-- admission area start -->
        
        <!-- admission area end -->


        



        
        <!-- admission cta area start -->
        
        <!-- admission cta area end -->


        <!-- admission apply area start -->
        
        <!-- admission apply area end -->
    </main>
@include('common.footer')
@include('common.script')

</body>
</html>