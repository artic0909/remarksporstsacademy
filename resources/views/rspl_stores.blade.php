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
    <link rel="stylesheet" href="{{ asset('css/rspl_store.css') }}" />
    <link rel="stylesheet" href="{{ asset('responsive/rspl_store_responsive.css') }}" />


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










            <!-- ===========================================Banner start========================================= -->
            <div
                id="carouselExampleCaptions"
                class="carousel slide"
                data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach($homeBannersDatas as $homeBannersData)
                    <div class="carousel-item active">
                        <img
                            src="{{ asset('storage/' . $homeBannersData->banner_image) }}"
                            class="d-block w-100"
                            alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$homeBannersData->title}}</h5>
                            <p>
                                {{$homeBannersData->description}}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- ===========================================Banner end========================================= -->

















            <!-- ===========================================RSPL Store start========================================= -->
            <section class="rspl_store_main bg-cl cl-w">
                <div class="rspl_store_inner">
                    <!-- heading -->
                    <div
                        class="os_heading_part d-flex justify-content-center pt-5 pb-5">
                        <div class="img_main">
                            <img src="{{ asset('images/ts2.png') }}" alt="" class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder">Remark's Store&nbsp;</h1>
                        <div class="img_main">
                            <img src="../images/ts1.png" alt="" class="img_right" />
                        </div>
                    </div>

                    <!-- content part -->
                    <div class="rspl_content_main">
                        <div class="rspl_content_inner">
                            <div class="top_rspl">
                                <input
                                    class="form-control inp_field"
                                    id="myInput"
                                    type="text"
                                    placeholder="Search...."
                                    style="border: none" />
                            </div>

                            <div class="mid_rspl">
                                <div class="mid_rspl_inner">
                                    <section class="section-products">
                                        <div class="container">
                                            <div class="row">






                                                @foreach($producuts as $producut)
                                                <!-- Single Product -->
                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                    <div id="product-2" class="single-product">
                                                        <div class="part-1"
                                                            style="
                              background: url('{{ asset('storage/' . $producut->rs_img) }}');;
                              background-position: center;
                              background-repeat: no-repeat;
                              background-size: cover;
                            ">
                                                            <span class="discount">{{$producut->rs_discount}}% off</span>
                                                            <ul>
                                                                <li>
                                                                    <a href="{{ $producut->rs_link }}" target="_blank"><i class="fas fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="{{ $producut->rs_link }}" target="_blank"><i class="fas fa-expand"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="part-2">
                                                            <h3 class="product-title">
                                                                {{$producut->rs_title}}
                                                            </h3>
                                                            <h4 class="product-price">₹ {{ $producut->rs_price }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach





                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ===========================================RSPL Store end========================================= -->










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

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".single-product").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

</body>

</html>