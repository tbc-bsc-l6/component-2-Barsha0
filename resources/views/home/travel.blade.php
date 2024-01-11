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

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        .btn-custom {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4D5CAD;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            border: 2px solid #4D5CAD;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            font-weight: 700;
        }

        .btn-custom:hover {
            background-color: #fff;
            color: #4D5CAD;
            border-color: #4D5CAD;
        }
    </style>


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

        <section>

            <div class="container" style="margin-top: 200px;">
                <div class="row">
                    @foreach ($posts as $index => $post)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card animate__animated animate__fadeInUp"
                                style="animation-delay: {{ $index * 100 }}ms;">
                                <img src="postimage/{{ $post->image }}" class="card-img-top" alt="Post Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{{ $post->description }}</p>
                                    <a href="#" class="btn btn-custom">Explore</a><!-- Updated button -->
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">{{ $post->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </section>
        <!--================ End Travel Category Area =================-->

        <footer class="footer-area section-gap">
            @include('home.footer')
        </footer>
    </section>
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
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        ScrollReveal().reveal('.card', {
            delay: 200,
            duration: 800,
            interval: 200
        });
    </script>



</body>
</html>
