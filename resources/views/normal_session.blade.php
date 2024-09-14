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
    <link rel="stylesheet" href="{{ asset('responsive/normal_session_responsive.css') }}" />


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

    <style>
        #description span {
            display: none;
        }
    </style>
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












            <!-- ======================================================Normal Session Part start============================================== -->
            <section class="normal_session_main bg-cl cl-w pb-5">
                <div class="normal_session_inner">
                    <!-- heading -->
                    <div
                        class="os_heading_part d-flex justify-content-center pt-5 pb-5">
                        <div class="img_main">
                            <img
                                src="{{ asset('images/ts2.png') }}"
                                alt=""
                                width="100"
                                class="img_left" />
                        </div>
                        <h1 class="our_s_heading fw-bolder">Normal Sesssion&nbsp;</h1>
                        <div class="img_main">
                            <img
                                src="{{ asset('images/ts1.png') }}"
                                alt=""
                                width="100"
                                class="img_right" />
                        </div>
                    </div>

                    <!-- content part -->
                    <div
                        class="normal_content_main"
                        style="margin-left: 3%; margin-right: 3%">
                        <div class="normal_content_inner">
                            <div class="">
                                <h1 class="fw-bolder d-flex align-items-center gap-2 pb-3">
                                    <img src="{{ asset('images/calender.png') }}" alt="" width="50" />
                                    Session Table
                                </h1>
                                <p class="pb-3 desc_normal" id="description" style="text-align: justify;">
                                    Lorem ipsum dolor sit Lorem ipsum, dolor sit amet
                                    consectetur adipisicing elit. Sit eligendi doloremque veniam
                                    debitis voluptatem esse eum explicabo porro distinctio culpa
                                    amet blanditiis facilis, magnam quidem dignissimos iure
                                    assumenda eveniet! Id. Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Rem nostrum voluptates magnam
                                    libero dignissimos possimus, est sequi voluptatibus nulla
                                    temporibus nisi numquam. Impedit explicabo modi illo dolor
                                    iure vel sint. amet consectetur adipisicing elit. Nisi
                                    cumque officia vel optio reiciendis ipsum odit provident.
                                    Eum praesentium eaque odit accusantium laudantium illo
                                    eligendi, assumenda odio consequatur adipisci saepe.
                                </p>
                                <a
                                    href="javascript:void(0);"
                                    id="read-more"
                                    class="read-more w-100 d-flex justify-content-end pb-3" style="color: white; text-decoration: none;">Read More</a>

                                <input
                                    class="form-control"
                                    id="myInput"
                                    type="text"
                                    placeholder="Search here for any information about session...."
                                    style="border: none; border-radius: 0" />
                                <br />
                                <div class="main_ov">
                                    <table
                                        class="table table_overflow table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sunday</th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <tr>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        src="{{ asset('images/clock.png') }}"
                                                        width="30"
                                                        alt=""
                                                        class="border rounded-5 bg-danger" />
                                                    Training session from 3:00 PM to 6:00 PM
                                                </td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="bg-light">
                                                    <a
                                                        class="cl-b"
                                                        href="/optional-session"
                                                        style="text-decoration: underline">Optional</a>
                                                </td>
                                                <td>-</td>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        class="border rounded-5 bg-danger"
                                                        src="{{ asset('images/clock.png') }}"
                                                        width="30"
                                                        alt="" />Training session from 3:00 PM to 6:00 PM
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        class="border rounded-5 bg-danger"
                                                        src="{{ asset('images/practice.png') }}"
                                                        width="30"
                                                        alt="" />
                                                    Net Practice session according to the age group of
                                                    students
                                                </td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="bg-light">
                                                    <a
                                                        class="cl-b"
                                                        href="/optional-session"
                                                        style="text-decoration: underline">Go</a>
                                                </td>
                                                <td>-</td>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        class="border rounded-5 bg-danger"
                                                        src="{{ asset('images/practice.png') }}"
                                                        width="30"
                                                        alt="" />
                                                    Net Practice session according to the age group of
                                                    students
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        class="border rounded-5 bg-danger"
                                                        src="{{ asset('images/catching.png') }}"
                                                        width="30"
                                                        alt="" />Extra Fielding Practice
                                                </td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="bg-light">
                                                    <a
                                                        class="cl-b"
                                                        href="/optional-session"
                                                        style="text-decoration: underline">Go</a>
                                                </td>
                                                <td>-</td>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        class="border rounded-5 bg-danger"
                                                        src="{{ asset('images/catching.png') }}"
                                                        width="30"
                                                        alt="" />Extra Fielding Practice
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        src="{{ asset('images/one_to_one.png') }}"
                                                        width="30"
                                                        alt="" />1:1 session
                                                </td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="bg-light">
                                                    <a
                                                        class="cl-b"
                                                        href="/optional-session"
                                                        style="text-decoration: underline">Go</a>
                                                </td>
                                                <td>-</td>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        src="{{ asset('images/one_to_one.png') }}"
                                                        width="30"
                                                        alt="" />1:1 session
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        class="border rounded-5 bg-danger"
                                                        src="{{ asset('images/time-left.png') }}"
                                                        width="30"
                                                        alt="" />Practice Ends at 6:00 PM
                                                </td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td class="bg-light">
                                                    <a
                                                        class="cl-b"
                                                        href="/optional-session"
                                                        style="text-decoration: underline">Go</a>
                                                </td>
                                                <td>-</td>
                                                <td class="d-flex align-items-center gap-1">
                                                    <img
                                                        class="border rounded-5 bg-danger"
                                                        src="{{ asset('images/time-left.png') }}"
                                                        width="30"
                                                        alt="" />Practice Ends at 6:00 PM
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ======================================================Normal Session Part end============================================== -->











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

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var descElement = document.getElementById("description");
            var readMoreElement = document.getElementById("read-more");

            var fullText = descElement.innerText;
            var words = fullText.split(" ");

            if (words.length > 30) {
                var visibleText = words.slice(0, 30).join(" ") + "...";
                var hiddenText = words.slice(30).join(" ");

                descElement.innerHTML =
                    visibleText + '<span id="more-text">' + hiddenText + "</span>";
                readMoreElement.style.display = "inline";

                readMoreElement.addEventListener("click", function() {
                    var moreText = document.getElementById("more-text");
                    moreText.style.display = "inline";
                    descElement.innerHTML = fullText;
                    readMoreElement.style.display = "none";
                });
            } else {
                readMoreElement.style.display = "none";
            }
        });
    </script>

    <script src="../js/common.js"></script>
</body>

</html>