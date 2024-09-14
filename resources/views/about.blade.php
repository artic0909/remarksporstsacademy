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
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/about_responsive.css') }}" />

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










            <!-- ============================= who we are start ========================================== -->
            <section class="who_we_main bg-cl cl-w">
                <div class="who_we_inner">
                    <!-- heading -->
                    <div
                        class="os_heading_part d-flex justify-content-center pt-5 pb-5">
                        <div class="img_main">
                            <img src="{{ asset('images/ts2.png') }}" alt="" class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder">Who We Are&nbsp;</h1>
                        <div class="img_main">
                            <img src="{{ asset('images/ts1.png') }}" alt="" class="img_right" />
                        </div>
                    </div>

                    <!-- content -->
                    <div class="who_we_content_main">
                        @foreach($aboutWhoDatas as $aboutWhoData)
                        <article class="postcard dark red">
                            <a class="postcard__img_link" href="#">
                                <img
                                    class="postcard__img"
                                    src="{{ asset('storage/' . $aboutWhoData->who_image) }}"
                                    alt="Image Title" />
                            </a>
                            <div class="postcard__text">
                                <h1 class="postcard__title red" style="text-transform: capitalize;"><a href="#">{{$aboutWhoData->who_title}}</a></h1>
                                <div class="postcard__subtitle small">
                                    <time datetime="2020-05-25 12:00:00">
                                        <i class="fas fa-calendar-alt mr-2"></i>{{$aboutWhoData->who_date}}
                                    </time>
                                </div>
                                <div class="postcard__bar"></div>
                                <div class="postcard__preview-txt post_desc">
                                    {{$aboutWhoData->who_desc}}
                                </div>
                                <ul class="postcard__tagbox">
                                    <li class="tag__item">
                                        <i class="fas fa-tag mr-2"></i>Remark
                                    </li>
                                    <li class="tag__item">
                                        <i class="fas fa-clock mr-2"></i>{{$aboutWhoData->updated_at}}
                                    </li>
                                </ul>
                            </div>
                        </article>

                        <br /><br />
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- ============================= who we are end========================================== -->















            <!-- ==============================our mission/ our vision start================================== -->
            <section class="miss_viss_main mt-4">
                <div class="miss_viss_inner">
                    <div class="miss_viss_left">
                        <div class="miss_viss_left_inner">
                            <!-- heading -->
                            <div
                                class="os_heading_part d-flex justify-content-center pt-5 pb-5">
                                <div class="img_main">
                                    <img src="{{ asset('images/ts2.png') }}" alt="" class="img_left" />
                                </div>
                                <h1 class="our_s_heading fw-bolder text-white">
                                    Our Mission&nbsp;
                                </h1>
                                <div class="img_main">
                                    <img src="{{ asset('images/ts1.png') }}" alt="" class="img_right" />
                                </div>
                            </div>

                            <!-- content left -->
                            <div class="miss-content">
                                <div class="miss_content_inner">
                                    @foreach($aboutMissionDatas as $aboutMissionData)
                                    <li class="list-item mb-4 bg-white p-4 miss_l_item">
                                        {{$aboutMissionData->mission}}
                                    </li>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="miss_viss_right">
                        <div class="miss_viss_right_inner">
                            <!-- heading -->
                            <div
                                class="os_heading_part d-flex justify-content-center pt-5 pb-5">
                                <div class="img_main">
                                    <img src="{{ asset('images/ts2.png') }}" alt="" class="img_left" />
                                </div>
                                <h1 class="our_s_heading fw-bolder text-white">
                                    Our Vision&nbsp;
                                </h1>
                                <div class="img_main">
                                    <img src="{{ asset('images/ts1.png') }}" alt="" class="img_right" />
                                </div>
                            </div>

                            <!-- content right -->
                            <div class="viss-content">
                                <div class="viss_content_inner">
                                    @foreach($aboutVisionDatas as $aboutVisionData)
                                    <li class="list-item mb-4 bg-white p-4 viss_l_item">
                                        {{$aboutVisionData->vision}}
                                    </li>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ==============================our mission/ our vision end================================== -->

            <br />























            <!-- ============================================club code ethics part start================================ -->
            <section class="cl_ethics_main">
                <div class="cl_ethics_inner">
                    <!-- heading -->
                    <div class="os_heading_part d-flex justify-content-center pt-5">
                        <div class="img_main">
                            <img src="{{ asset('images/tstw2.png') }}" alt="" class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder text-danger">
                            Club Ethics&nbsp;
                        </h1>
                        <div class="img_main">
                            <img src="{{ asset('images/tstw1.png') }}" alt="" class="img_right" />
                        </div>
                    </div>

                    <!-- content part -->
                    <div class="cl_ethics_content">
                        <div class="cl_ethics_content_inner">
                            <h2 class="cl_ethics_heading fw-bold cl-b">
                                <img src="{{ asset('images/winner.png') }}" width="60" alt="" />
                                Our Code of Ethics :
                            </h2>

                            @foreach($aboutClubEthicsDatas as $aboutClubEthicsData)
                            <p class="cl_ethics_desc">
                                {{$aboutClubEthicsData->club_ethics}}
                            </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================================club code ethics part end================================ -->















            <!-- ================================Players Code part start============================= -->
            <section class="pl_ethics_main">
                <div class="pl_ethics_inner">
                    <!-- heading -->
                    <div class="os_heading_part d-flex justify-content-center pt-5">
                        <div class="img_main">
                            <img src="{{ asset('images/tstw2.png') }}" alt="" class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder text-danger">
                            Players Code&nbsp;
                        </h1>
                        <div class="img_main">
                            <img src="{{ asset('images/tstw1.png') }}" alt="" class="img_right" />
                        </div>
                    </div>

                    <!-- content part -->
                    <div class="pl_ethics_content">
                        <div class="pl_ethics_content_inner">
                            <h2 class="pl_ethics_heading fw-bold cl-b">
                                <img src="{{ asset('images/information.png') }}" width="50" alt="" />
                                Players Should Know :
                            </h2>

                            <div class="pl_ethics_desc">
                                <ol class="list-group list-group-light list-group-numbered">
                                    @foreach($aboutPlayerEthicsDatas as $aboutPlayerEthicsData)
                                    <li class="list-group-item">
                                        {{$aboutPlayerEthicsData->player_ethics}}
                                    </li>
                                    @endforeach
                                </ol>

                                <div class="img_guide rounded" style="background: url({{ asset('images/empty.jpg') }});"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ================================Players Code part end============================= -->

            <br />
















            <!-- =============================================About Founder start======================================= -->
            <section class="about_founder_main bg-cl text-white">
                <div class="about_founder_inner">
                    <!-- heading -->
                    <div
                        class="os_heading_part d-flex justify-content-center pt-5 pb-5">
                        <div class="img_main">
                            <img src="{{ asset('images/ts2.png') }}" alt="" class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder">About The Founder&nbsp;</h1>
                        <div class="img_main">
                            <img src="{{ asset('images/ts1.png') }}" alt="" class="img_right" />
                        </div>
                    </div>

                    <!-- content part -->
                    <div class="about_founder_content pb-5">
                        <div class="about_founder_inner">
                            <h1 class="about_founder_title">Sekh Arif Hossin</h1>

                            <div class="founder_desc_main">
                                @foreach($aboutFounderDatas as $aboutFounderData)
                                <p class="about_founder_desc">
                                    {!! nl2br(e($aboutFounderData->founder_desc)) !!}
                                </p>
                                

                                <div class="img_founder" style="background: url('{{ asset('storage/' . $aboutFounderData->founder_img) }}');"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =============================================About Founder end======================================= -->

            <br />



















            <!-- =============================================conatact query start==================================================== -->
            <section class="contact_q">
                <div class="contact_q_inner">
                    <h4>If you have any query feel free to contact us.</h4>
                    <p>
                        We would be happy to answer your questions and set up a meeting
                        with you. Call us at +91
                        <a
                            href="tel:+919163917909"
                            style="text-decoration: underline; color: rgb(21, 21, 65)">91639 17909</a>.
                    </p>
                </div>
            </section>
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
                                <p>
                                    Here you can use rows and columns to organize your footer
                                    content. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit.
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
                                    <i class="fas fa-home mr-3"></i> Ranihati, HW 711302, IND
                                </p>
                                <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                                <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                                <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
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
                <img src="{{ asset('images/icon_store.png') }}" width="30" alt="">
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