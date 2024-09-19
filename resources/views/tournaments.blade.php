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
    <link rel="stylesheet" href="{{ asset('css/tournaments.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/tournaments_responsive.css') }}" />


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

















            <!-- ======================================================Tournaments Part start============================================== -->
            <section class="tournaments_main bg-cl cl-w pb-1">
                <div class="tournaments_inner">
                    <!-- Heading -->
                    <div class="os_heading_part d-flex justify-content-center">
                        <div class="img_main">
                            <img src="{{ asset('images/ts2.png') }}" alt="Left Image" width="100" class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder">Tournaments</h1>
                        <div class="img_main">
                            <img src="{{ asset('images/ts1.png') }}" alt="Right Image" width="100" class="img_right" />
                        </div>
                    </div>

                    <!-- Content Part -->
                    <div class="tournaments_content_main">
                        <div class="tournaments_content_inner pb-5">
                            <section id="gallery-2" class="gallery m-5">
                                <div class="container-fluid">
                                    <!-- Buttons -->
                                    <div class="btns_main justify-content-center" style="border-bottom: 1px solid white;">
                                        <div class="btns_inner">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <button class="nav-link btn rounded active" id="pills-filter-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all" aria-selected="true">
                                                        ALL
                                                    </button>
                                                </li>
                                                @foreach($tournamentsCategoryDatas as $tournamentsCategoryData)
                                                <li class="nav-item">
                                                    <button class="nav-link btn rounded" id="pills-filter-{{ strtolower(str_replace(' ', '-', $tournamentsCategoryData->t_category)) }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ strtolower(str_replace(' ', '-', $tournamentsCategoryData->t_category)) }}" type="button" role="tab" aria-controls="pills-{{ strtolower(str_replace(' ', '-', $tournamentsCategoryData->t_category)) }}" aria-selected="false" style="text-transform: uppercase;">
                                                        {{ $tournamentsCategoryData->t_category }}
                                                    </button>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Result -->
                                    <div class="tab-content" id="pills-tabContent">
                                        <!-- All Tournaments -->
                                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-filter-all-tab" tabindex="0">
                                            @foreach($tournamentsDetailsDatas as $tournamentsDetailsData)
                                            <article class="tournament_details_main">
                                                <div class="tournament_d_inner">
                                                    <div class="t_d_left" style="background: url('{{ asset('storage/' . $tournamentsDetailsData->td_image) }}');"></div>
                                                    <div class="t_d_right">
                                                        <div class="t_d_rignt_inner pb-3" style="border-bottom: 1px solid white;">
                                                            <h4 class="t_d_heading">{{ $tournamentsDetailsData->td_title }}</h4>
                                                            <h5 class="t_d_place" style="text-transform: capitalize;">
                                                                <i class="fa-solid fa-map-location-dot"></i>&nbsp;{{ $tournamentsDetailsData->td_add }}
                                                            </h5>
                                                            <h5 class="t_d_place3" style="text-transform: capitalize;">
                                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;{{ $tournamentsDetailsData->td_date }}
                                                            </h5>
                                                            <h5 class="t_d_place2" style="text-transform: capitalize;">
                                                                <i class="fa-solid fa-clock"></i>&nbsp;{{ $tournamentsDetailsData->td_time }}
                                                            </h5>
                                                            <p class="t_d_desc mt-4">
                                                                <strong><i class="fa-solid fa-database"></i>&nbsp;Description: </strong>{{ $tournamentsDetailsData->td_desc }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            @endforeach
                                        </div>

                                        <!-- Filtered Tournaments -->
                                        @foreach($tournamentsCategoryDatas as $tournamentsCategoryData)
                                        <div class="tab-pane fade" id="pills-{{ strtolower(str_replace(' ', '-', $tournamentsCategoryData->t_category)) }}" role="tabpanel" aria-labelledby="pills-filter-{{ strtolower(str_replace(' ', '-', $tournamentsCategoryData->t_category)) }}-tab" tabindex="0">
                                            @foreach($tournamentsDetailsDatas->where('td_category', $tournamentsCategoryData->t_category) as $tournament)
                                            <article class="tournament_details_main">
                                                <div class="tournament_d_inner">
                                                    <div class="t_d_left" style="background: url({{ asset('images/empty.jpg') }});"></div>
                                                    <div class="t_d_right">
                                                        <div class="t_d_rignt_inner pb-3" style="border-bottom: 1px solid white;">
                                                            <h4 class="t_d_heading">{{ $tournament->td_title }}</h4>
                                                            <h5 class="t_d_place" style="text-transform: capitalize;">
                                                                <i class="fa-solid fa-map-location-dot"></i>&nbsp;{{ $tournament->td_add }}
                                                            </h5>
                                                            <h5 class="t_d_place3" style="text-transform: capitalize;">
                                                                <i class="fa-solid fa-calendar-days"></i>&nbsp;{{ $tournament->td_date }}
                                                            </h5>
                                                            <h5 class="t_d_place2" style="text-transform: capitalize;">
                                                                <i class="fa-solid fa-clock"></i>&nbsp;{{ $tournament->td_time }}
                                                            </h5>
                                                            <p class="t_d_desc mt-4">
                                                                <strong><i class="fa-solid fa-database"></i>&nbsp;Description: </strong>{{ $tournament->td_desc }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            @endforeach
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>
    </div>
    </section>

    <!-- ======================================================Tournaments Part end============================================== -->















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