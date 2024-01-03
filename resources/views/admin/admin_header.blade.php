    <x-slot name="header">
        <div class="container-fluid">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li><a id="len1" class="hoverable" href="#">Home</a></li>
                        @if (Auth::user()->usertype === 'admin')
                            <li><a id="len3" class="hoverable" href="#">Post Management</a></li>
                            <li><a id="len4" class="hoverable" href="#">User Management</a></li>
                        @endif

                        <li><a id="len2" class="hoverable" href="{{ url('post_page') }}">Add Post</a></li>
                        <li><a id="len2" class="hoverable" href="{{ url('viewpost') }}">Your Post</a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </x-slot>

    <style>
        .hoverable {
            display: inline-block;
            backface-visibility: hidden;
            vertical-align: middle;
            position: relative;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            tranform: translateZ(0);
            transition-duration: .3s;
            transition-property: transform;
        }

        .hoverable:before {
            position: absolute;
            pointer-events: none;
            z-index: -1;
            content: '';
            top: 100%;
            left: 5%;
            height: 10px;
            width: 90%;
            opacity: 0;
            background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
            background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
            /* W3C */
            transition-duration: 0.3s;
            transition-property: transform, opacity;
        }

        .hoverable:hover,
        .hoverable:active,
        .hoverable:focus {
            transform: translateY(-5px);
        }

        .hoverable:hover:before,
        .hoverable:active:before,
        .hoverable:focus:before {
            opacity: 1;
            transform: translateY(-5px);
        }



        @keyframes bounce-animation {
            16.65% {
                -webkit-transform: translateY(8px);
                transform: translateY(8px);
            }

            33.3% {
                -webkit-transform: translateY(-6px);
                transform: translateY(-6px);
            }

            49.95% {
                -webkit-transform: translateY(4px);
                transform: translateY(4px);
            }

            66.6% {
                -webkit-transform: translateY(-2px);
                transform: translateY(-2px);
            }

            83.25% {
                -webkit-transform: translateY(1px);
                transform: translateY(1px);
            }

            100% {
                -webkit-transform: translateY(0);
                transform: translateY(0);
            }
        }

        .bounce {
            animation-name: bounce-animation;
            animation-duration: 2s;
        }



        /*everything below here is just setting up the page, so dont worry about it */


        @media (min-width: 768px) {
            .navbar {
                text-align: center !important;
                float: none;
                display: inline-block;
            }
        }

        body {
            background-color: rgba(0, 0, 0, 1);
            font-weight: 600;
            text-align: center !important;
            color: white;
        }

        nav {
            background: none !important;
            text-transform: uppercase;

            li {
                margin-left: 3em;
                margin-right: 3em;
                display: inline;

                a {
                    transition: .5s color ease-in-out;
                }
            }
        }

        .page-title {
            opacity: .75 !important;
        }
    </style>

    <script>
        $(function() {
            var str = '#len'; //increment by 1 up to 1-nelemnts
            $(document).ready(function() {
                var i, stop;
                i = 1;
                stop = 4; //num elements
                setInterval(function() {
                    if (i > stop) {
                        return;
                    }
                    $('#len' + (i++)).toggleClass('bounce');
                }, 500)
            });
        });
    </script>
