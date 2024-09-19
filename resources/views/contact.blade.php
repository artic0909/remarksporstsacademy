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
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/contact_responsive.css') }}" />


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
















            <!-- =============================================Get In Touch start============================================================= -->
            <section class="get_t_main bg-cl cl-w">
                <div class="get_t_inner">
                    <!-- heading -->
                    <div class="os_heading_part d-flex justify-content-center pt-5 pb-5">
                        <div class="img_main">
                            <img src="{{ asset('/images/ts2.png') }}" alt="Left Image" width="100" class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder">Get In Touch&nbsp;</h1>
                        <div class="img_main">
                            <img src="{{ asset('/images/ts1.png') }}" alt="Right Image" width="100" class="img_right" />
                        </div>
                    </div>

                    <!-- content part -->
                    <div class="get_t_content">
                        <div class="get_t_content_inner">
                            <div class="form_main">
                                <div class="form_inner">
                                    <form action="{{ route('contact.submit') }}" method="POST">
                                        @csrf

                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row mb-4">
                                            <div class="col">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="f_name" name="f_name" class="form-control" required />
                                                    <label class="form-label pt-2" for="f_name">First Name</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div data-mdb-input-init class="form-outline">
                                                    <input type="text" id="l_name" name="l_name" class="form-control" required />
                                                    <label class="form-label pt-2" for="l_name">Last Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Address input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="add" name="add" class="form-control" required />
                                            <label class="form-label pt-2" for="add">Address</label>
                                        </div>

                                        <!-- Email input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="email" id="email" name="email" class="form-control" required />
                                            <label class="form-label pt-2" for="email">Email</label>
                                        </div>

                                        <!-- Phone input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" id="contact" name="contact" class="form-control" required />
                                            <label class="form-label pt-2" for="contact">Phone</label>
                                        </div>

                                        <!-- Message input -->
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                            <label class="form-label pt-2" for="message">Feel Free to Ask/Feedback</label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-danger w-100">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Additional Links or Contact Information -->
                            <div class="linkss">
                                <div class="inner_linkss" style="list-style-type: none;">
                                    @foreach($homeComapanyDatas as $homeComapanyData)
                                    <li class="round_back">
                                        <a href="tel:{{$homeComapanyData->company_phone}}"><img src="{{ asset('/images/customer-service.png') }}" alt="Customer Service" /></a>
                                    </li>

                                    <li class="round_back">
                                        <a href="mailto:{{$homeComapanyData->company_email}}"><img src="{{ asset('/images/envelop.png') }}" alt="Email" /></a>
                                    </li>
                                    @endforeach
                                    <li class="round_back">
                                        <a href="https://www.google.com/maps/place/Your+Location" target="_blank"><img src="{{ asset('/images/location.png') }}" alt="Location" /></a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- =============================================Get In Touch end============================================================= -->

















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
            <a href="/admission-now" class="btn floating-btn">Addmission Now</a>
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
        </div>
    </div>

    <script src="../js/common.js"></script>
</body>

</html>