<!doctype html>
<html lang="en">

<body>
    <header class="header_area">
        @include('home.header')
    </header>

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
    </div>

    <footer class="footer-area section-gap">
        @include('home.footer')
    </footer>
</body>
