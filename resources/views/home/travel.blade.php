<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" href="img/favicon.png" type="image/png"> --}}
    <title>TheJournal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>


<body>
    <header class="header_area">
        @include('home.header')
    </header>

    <section class="travel_category">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h1>Best Travel Experience Within the Universe.</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row owl-carousel" id="travel_cat">

                @foreach ($posts as $post)
                    <div class="single_travel wow fadeIn" data-wow-duration="1s">
                        <figure>
                            <img class="img-fluid" src="$post->image" alt="">
                        </figure>
                        <div class="overlay"></div>
                        <div class="text-wrap">
                            <h3>
                                <a href="#">$post->category</a>
                            </h3>
                            <div class="blog-meta white d-flex justify-content-between align-items-center flex-wrap">
                                <div class="meta">
                                    <a href="#">
                                        <span class="icon fa fa-calendar"></span> March 14, 2018
                                        <span class="icon fa fa-comments"></span> 05
                                    </a>
                                </div>
                                <div>
                                    <a class="read_more" href="#">{{ $post->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!--================ End Travel Category Area =================-->






    <footer class="footer-area section-gap">
        @include('home.footer')
    </footer>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/theme.js"></script>

</body>
