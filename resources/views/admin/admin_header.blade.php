<head>

    <style>
        .navbar {
            padding: 15px;
        }

        .nav.navbar-nav {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav.navbar-nav li {
            margin-right: 10px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }
    </style>


</head>




<div name="header" class="bg-gray-800 text-white"
    style="margin-bottom: 20px; padding: 10px 10px; height: 100px;">
    <div class="container-fluid">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a id="len1" class="hoverable" href="{{ route('home') }}">Home</a></li>
                    @if (Auth::user()->usertype === 'admin')
                        <li><a id="len3" class="hoverable" href="#">Post Management</a></li>
                        <li><a id="len4" class="hoverable" href="#">User Management</a></li>
                    @endif

                    <li><a id="len2" class="hoverable" href="{{ url('post_page') }}">Add Post</a></li>
                    <!-- Your Post moved to a different position -->
                    <li><a id="len2" class="hoverable" href="{{ url('viewpost') }}">View Post</a></li>

                    <li>
                        {{-- Dropdown content --}}
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>

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

    .header {}

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
