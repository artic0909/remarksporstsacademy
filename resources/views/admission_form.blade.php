<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    @php
    $routeName = Route::currentRouteName();
    $metaData = \App\Http\Controllers\MetaTagController::getMetaTags($routeName);
    @endphp




    <title>{{ $metaData['title'] ?? 'Default Title' }}</title>
    <meta name="description" content="{{ $metaData['description'] ?? 'Default description' }}">
    <meta name="keywords" content="{{ $metaData['keywords'] ?? 'Default, Keywords' }}">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admission_form.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/admission_form_responsive.css') }}" />


    <!-- CDNs -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- icon -->
    <link rel="icon" href="images/logo.png" sizes="200x200" type="image/png">
    <link rel="icon" href="favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="favicon-16x16.png" sizes="16x16" type="image/png">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />


</head>

<body>
    <div class="Remark_main_container">
        <div class="Remark_main_inner_container">







            <!-- ============================================Navbar Start========================================= -->
            <nav
                class="navbar navbar-expand-lg navbar-dark p-3 bg-danger"
                id="headerNav">
                <div class="container-fluid">
                    <a class="navbar-brand d-block d-lg-none" href="/">
                        <img src="{{ asset('images/logo.png') }}" height="80" />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a
                                    class="nav-link mx-2 active"
                                    aria-current="page"
                                    href="/">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mx-2 active" href="/about">About</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link mx-2 active dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Coaching
                                </a>
                                <ul
                                    class="dropdown-menu"
                                    aria-labelledby="navbarDropdownMenuLink">
                                    <li class="lis">
                                        <a class="dropdown-item" href="/normal-session">Normal Session</a>
                                    </li>
                                    <li class="lis">
                                        <a class="dropdown-item" href="/optional-session">Optional Session</a>
                                    </li>
                                </ul>
                            </li>


                            <!-- <li class="nav-item">
                  <a class="nav-link mx-2 active" href="/admission-now">Addmission</a>
                </li> -->

                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link mx-2" href="/">
                                    <img src="{{ asset('images/logo.png') }}" height="80" />
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mx-2 active" href="/tournaments">Tournaments</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link mx-2 active" href="/gallery">Gallery</a>
                            </li>


                            <!-- <li class="nav-item">
                  <a class="nav-link mx-2 active" href="/rspl-store">Store</a>
                </li> -->

                            <li class="nav-item">
                                <a class="nav-link mx-2 active" href="/contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ============================================Navbar End========================================= -->













            <!-- ===================================Banner Part start============================================== -->
            <div
                id="carouselExampleInterval"
                class="carousel slide"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($aboutDatas as $aboutData)
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img
                            src="{{ asset('storage/' . $aboutData->all_banner_image) }}"
                            class="d-block w-100"
                            alt="..." />
                    </div>
                    @endforeach
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- ===================================Banner Part end============================================== -->












            <!--=====================================================Admission Form start================================================================================= -->
            <section class="admission_form_main bg-cl cl-w p-5">
                <div class="add_form_inner">
                    <!-- heading -->
                    <div class="os_heading_part d-flex justify-content-center pb-5">
                        <div class="img_main">
                            <img
                                src="{{ asset('/images/ts2.png') }}"
                                alt=""
                                width="100"
                                class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder">Addmission Now&nbsp;</h1>
                        <div class="img_main">
                            <img
                                src="{{ asset('/images/ts1.png') }}"
                                alt=""
                                width="100"
                                class="img_right" />
                        </div>
                    </div>

                    <!-- content part -->
                    <div id="container" class="container mt-2">
                        <div class="progress px-1" style="height: 3px">
                            <div
                                class="progress-bar"
                                role="progressbar"
                                style="width: 0%"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                        <div class="step-container d-flex justify-content-between">
                            <div class="step-circle" onclick="displayStep(1)">1</div>
                            <div class="step-circle" onclick="displayStep(2)">2</div>
                            <div class="step-circle" onclick="displayStep(3)">3</div>
                            <div class="step-circle" onclick="displayStep(4)">4</div>
                        </div>

                        <form id="multi-step-form" action="{{ route('admission_form') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="step step-1">
                                <!-- Step 1 form fields here -->
                                <h3>PERSONAL DETAILS</h3>
                                <div class="mb-3">
                                    <label
                                        for="name"
                                        class="form-label"
                                        id="name">Name <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        class="form-control input_fields"
                                        id="name"
                                        name="name"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="gender" id="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        class="form-control input_fields"
                                        id="gender"
                                        name="gender"
                                        placeholder="use small letters (e.g- male/female/others)"
                                        required
                                        aria-describedby="genHelp" />
                                    <div id="genHelp" class="form-text" style="color: white; opacity: 0.8;">Use small letters (e.g- male/female/others)</div>
                                </div>

                                <div class="mb-3">
                                    <label for="dob" id="dob" class="form-label">Date Of Birth <span class="text-danger">*</span></label>
                                    <input
                                        type="date"
                                        class="form-control input_fields"
                                        id="dob"
                                        name="dob"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="f_name" id="f_name" class="form-label">Father's Name <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        class="form-control input_fields"
                                        id="f_name"
                                        name="f_name"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="m_name" id="m_name" class="form-label">Mother's Name <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        class="form-control input_fields"
                                        id="m_name"
                                        name="m_name"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="nationality" id="nationality" class="form-label">Nationality <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        class="form-control input_fields"
                                        id="nationality"
                                        name="nationality"
                                        required />
                                </div>

                                <div class="buttons_main">
                                    <button
                                        style="border-radius: 0"
                                        type="button"
                                        class="btn btn-danger next-step w-100">
                                        Next
                                    </button>
                                </div>
                            </div>

                            <div class="step step-2">
                                <!-- Step 2 form fields here -->
                                <h3>CONTACT DETAILS</h3>

                                <div class="mb-3">
                                    <label for="add" class="form-label" id="add">Address <span class="text-danger">*</span></label>

                                    <textarea
                                        class="form-control input_fields"
                                        name="add"
                                        id="add"
                                        required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="pin_no" class="form-label" id="pin_no">PIN Code <span class="text-danger">*</span></label>

                                    <input
                                        type="number"
                                        id="pin_no"
                                        name="pin_no"
                                        class="form-control input_fields"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="tele" class="form-label" id="tele">Mobile Number <span class="text-danger">*</span></label>

                                    <input
                                        type="number"
                                        id="tele"
                                        name="tele"
                                        class="form-control input_fields" />
                                </div>

                                <div class="mb-3">
                                    <label for="mob" class="form-label" id="mob">Whatsapp Number <span class="text-danger">*</span></label>

                                    <input
                                        type="number"
                                        id="mob"
                                        name="mob"
                                        class="form-control input_fields"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label" id="email">Email ID <span class="text-danger">*</span></label>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="form-control input_fields"
                                        required />
                                </div>

                                <div class="buttons_main d-flex gap-3">
                                    <button
                                        style="border-radius: 0"
                                        type="button"
                                        class="btn btn-warning prev-step w-100">
                                        Previous
                                    </button>
                                    <button
                                        style="border-radius: 0"
                                        type="button"
                                        class="btn btn-danger next-step w-100">
                                        Next
                                    </button>
                                </div>
                            </div>

                            <div class="step step-3">
                                <!-- Step 3 form fields here -->
                                <h3>PHYSICAL DESCRIPTION</h3>

                                <div class="mb-3">
                                    <label for="height" id="height" class="form-label">Height (FT.) <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        class="form-control input_fields"
                                        id="height"
                                        name="height"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="weight" id="weight" class="form-label">Weight (KG.) <span class="text-danger">*</span></label>
                                    <input
                                        type="text"
                                        class="form-control input_fields"
                                        id="weight"
                                        name="weight"
                                        required />
                                </div>

                                <div class="mb-3">
                                    <label for="medical_history" class="form-label" id="medical_history">Any Medical History
                                        <span class="text-danger">*</span></label>

                                    <textarea
                                        class="form-control input_fields"
                                        name="medical_history"
                                        id="medical_history"
                                        required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="health_problemms"
                                        class="form-label"
                                        id="health_problemms">Any Health Problem
                                        <span class="text-danger">*</span></label>

                                    <textarea
                                        class="form-control input_fields"
                                        name="health_problemms"
                                        id="health_problemms"
                                        required></textarea>
                                </div>

                                <div class="buttons_main d-flex gap-3">
                                    <button
                                        style="border-radius: 0"
                                        type="button"
                                        class="btn btn-warning prev-step w-100">
                                        Previous
                                    </button>
                                    <button
                                        style="border-radius: 0"
                                        type="button"
                                        class="btn btn-danger next-step w-100">
                                        Next
                                    </button>
                                </div>
                            </div>

                            <div class="step step-4">
                                <!-- Step 4 form fields here -->
                                <h3>REQUIRED DOCUMENT</h3>

                                <div class="mb-3">
                                    <label
                                        for="cer_dob"
                                        id="cer_dob"
                                        class="form-label">DOB Certificate(pdf) <span class="text-danger">*</span></label>
                                    <input
                                        type="file"
                                        class="form-control input_fields"
                                        id="cer_dob"
                                        name="cer_dob"
                                        aria-describedby="dobHelp" />
                                    <div id="dobHelp" class="form-text" style="color: white; opacity: 0.8;">Less than 1.5MB</div>
                                </div>

                                <div class="mb-3">
                                    <label
                                        for="cer_fit"
                                        class="form-label"
                                        id="cer_fit">Medical Fit Certificate(pdf)
                                        <span class="text-danger">*</span></label>
                                    <input
                                        type="file"
                                        class="form-control input_fields"
                                        id="cer_fit"
                                        name="cer_fit"
                                        aria-describedby="medfitHelp" />
                                    <div id="medfitHelp" class="form-text" style="color: white; opacity: 0.8;">Less than 1.5MB</div>
                                </div>

                                <div class="mb-3">
                                    <label for="st_img" class="form-label" id="st_img">Photo Copy (Coloured)
                                        <span class="text-danger">*</span></label>
                                    <input
                                        type="file"
                                        class="form-control input_fields"
                                        id="st_img"
                                        name="st_img"
                                        aria-describedby="photoHelp" />
                                    <div id="photoHelp" class="form-text" style="color: white; opacity: 0.8;">Less than 1.5MB</div>
                                </div>

                                <div class="buttons_main d-flex gap-3">
                                    <button
                                        style="border-radius: 0"
                                        type="button"
                                        class="btn btn-warning prev-step w-100">
                                        Previous
                                    </button>
                                    <button
                                        style="border-radius: 0"
                                        type="submit"
                                        class="btn btn-danger w-100">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!--=====================================================Admission Form ens================================================================================= -->



















            <!-- =============================================conatact query start==================================================== -->
            @foreach($homeComapanyDatas as $homeComapanyData)
            <section class="contact_q">
                <div class="contact_q_inner">
                    <h4>If you have any query feel free to contact us.</h4>
                    <p>
                        We would be happy to answer your questions and set up a meeting
                        with you. Call us at +91
                        <a
                            href="tel:{{$homeComapanyData->company_phone}}"
                            style="text-decoration: underline; color: rgb(21, 21, 65)">{{$homeComapanyData->company_phone}}</a>.
                    </p>
                </div>
            </section>
            @endforeach
            <!-- =============================================conatact query end==================================================== -->








            <!-- ===================================footer start========================================= -->
            <footer
                class="text-center text-lg-start text-white"
                style="background-color: rgb(21, 21, 65)">
                <!-- Section: Social media -->
                <section class="social_main_and_inner p-4 bg-danger">
                    <!-- Left -->
                    <div class="me-5">
                        <span
                            class="social_desc"
                            style="font-size: 1.1rem; font-weight: 600">Get connected with us on social networks<span class="hide_cl">:</span></span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a
                            href=""
                            class="text-white me-4"
                            style="text-decoration: none; font-size: 1.4rem">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a
                            href=""
                            class="text-white me-4"
                            style="text-decoration: none; font-size: 1.4rem">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a
                            href=""
                            class="text-white me-4"
                            style="text-decoration: none; font-size: 1.4rem">
                            <i class="fab fa-google"></i>
                        </a>
                        <a
                            href=""
                            class="text-white me-4"
                            style="text-decoration: none; font-size: 1.4rem">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a
                            href=""
                            class="text-white me-4"
                            style="text-decoration: none; font-size: 1.4rem">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a
                            href=""
                            class="text-white me-4"
                            style="text-decoration: none; font-size: 1.4rem">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold">Remark Academy</h6>
                                <hr
                                    class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p style="text-align: justify;">
                                    Building future champions with expert coaching and a variety of sports programs. We help youth unlock their potential and excel both on and off the field.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Products</h6>
                                <hr
                                    class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="/about" class="text-white">About</a>
                                </p>
                                <p>
                                    <a href="/normal-session" class="text-white">Noraml Session</a>
                                </p>
                                <p>
                                    <a href="/admission-now" class="text-white">Admission Now</a>
                                </p>
                                <p>
                                    <a href="/rspl-store" class="text-white">Remark Store</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Useful links</h6>
                                <hr
                                    class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <a href="/contact-us" class="text-white">Get In Touch</a>
                                </p>
                                <p>
                                    <a href="/rspl-store" class="text-white">Products</a>
                                </p>
                                <p>
                                    <a href="https://www.sumatra.in/product-list?category=sports-1" class="text-white">Sumatra Shopping</a>
                                </p>
                                <p>
                                    <a href="/gallery" class="text-white">Gallery</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold">Contact</h6>
                                <hr
                                    class="mb-4 mt-0 d-inline-block mx-auto"
                                    style="width: 60px; background-color: #7c4dff; height: 2px" />
                                <p>
                                    <i class="fas fa-home mr-3"></i> <a target="_blank" href="https://www.google.com/maps/place/Your+Location" style="text-decoration: none; color: white;"> Ranihati, HW 711302, IND</a>
                                </p>
                                @foreach($homeComapanyDatas as $homeComapanyData)
                                <p><i class="fas fa-envelope mr-3"></i><a href="mailto:{{$homeComapanyData->company_email}}" target="_blank" style="text-decoration: none; color: white;"> {{$homeComapanyData->company_email}}</a></p>
                                <p><i class="fas fa-phone mr-3"></i> + 91 <a href="tel:{{$homeComapanyData->company_phone}}" style="text-decoration: none; color: white;">{{$homeComapanyData->company_phone}}</a></p>

                                <p><i class="fa-brands fa-whatsapp"></i> + 91 <a href="https://wa.me/91{{$homeComapanyData->company_phone}}"
                                        style="text-decoration: none; color: white;"
                                        target="_blank">
                                        {{$homeComapanyData->company_phone}}
                                    </a></p>
                                @endforeach
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <div
                    class="text-center p-3"
                    style="background-color: rgba(0, 0, 0, 0.2)">
                    © 2024 Copyright:
                    <a class="text-white" href="">RemarkAcademy.info</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- ===================================footer end========================================= -->












            <!-- =============floating addmission now btn start================================ -->
            <a href="/" class="btn floating-btn"><i class="fa-solid fa-house"></i></a>
            <!-- =============floating addmission now btn end================================ -->












            <!-- =============floating store btn start================================ -->
            <a href="/rspl-store" class="btn floating-btn2">
                <img src="{{ asset('/images/icon_store.png') }}" width="30" alt="">
            </a>
            <!-- =============floating store btn end================================ -->










            <!-- ====================================back to top button start==================================================== -->
            <button
                type="button"
                class="btn btn-danger btn-floating btn-lg"
                id="btn-back-to-top">
                <i class="fas fa-arrow-up"></i>
            </button>
            <!-- ====================================back to top button end==================================================== -->







            <!-- Success Modal -->
            <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="successModalLabel">Success</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-emerald-700">
                            Your form has been successfully submitted!
                        </div>
                        <div class="modal-footer">
                            <a href="/admission-now" type="button" class="btn btn-success">Close</a>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Unsuccess Modal -->
            <div class="modal fade" id="unsuccessModal" tabindex="-1" aria-labelledby="unsuccessModalLabel" aria-hidden="true" data-bs-backdrop="static">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="unsuccessModalLabel">Submission <span style="color: rgb(209,53,69);">Failure</span></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-emerald-700">
                            Please check your inputs and instructions again!
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>

    <script src="../js/common.js"></script>
    <script src="../js/admission_form.js"></script>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#multi-step-form').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                // Perform client-side validation for required fields
                var isValid = true;
                $('#multi-step-form input[required], #multi-step-form textarea[required]').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        $(this).addClass('is-invalid'); // Add error class for invalid fields
                    } else {
                        $(this).removeClass('is-invalid'); // Remove error class if valid
                    }
                });

                // If validation fails, show unsuccessful modal
                if (!isValid) {
                    $('#unsuccessModal').modal('show');
                    return; // Stop form submission if validation fails
                }

                // Proceed with AJAX submission if validation passes
                var formData = new FormData(this);

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            $('#successModal').modal('show'); // Show success modal if server-side validation passes
                        } else {
                            $('#unsuccessModal').modal('show'); // Show unsuccessful modal if server-side validation fails
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Form submission error:', error);
                        $('#unsuccessModal').modal('show'); // Show unsuccessful modal on submission error
                    }
                });
            });
        });
    </script>


</body>

</html>