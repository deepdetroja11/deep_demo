<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Apr 2024 15:36:08 GMT -->
<head>
    <meta charset="utf-8">
    <title>Deep - Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/circle.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ url('assets/css/skins/yellow.css') }}" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link href="{{ url('assets/css/skins/blue.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/green.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/yellow.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/blueviolet.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/goldenrod.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/magenta.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/orange.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/purple.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/red.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/skins/yellowgreen.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/styleswitcher.css') }}" rel="stylesheet">

    <!-- Modernizr JS File -->
    <script src="{{ asset('assets') }}/js/modernizr.custom.js"></script>
</head>
<body class="@if(Request::is('about')) about @elseif(Request::is('/')) home @elseif(Request::is('contact')) contact @elseif(Request::is('portfolio')) portfolio @endif">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/purple.png" alt="purple"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/red.png" alt="red"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/blueviolet.png" alt="blueviolet"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/blue.png" alt="blue"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/goldenrod.png" alt="goldenrod"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/magenta.png" alt="magenta"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/yellowgreen.png" alt="yellowgreen"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/orange.png" alt="orange"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/green.png" alt="green"/></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="{{ asset('assets') }}/img/styleswitcher/yellow.png" alt="yellow"/></a>
                </li>
            </ul>
            <a href="https://themeforest.net/item/tunis-personal-portfolio/26761598?irgwc=1&amp;clickid=UBs0rDX6YxyJWfewUx0Mo3E1UkiwozXD10XATw0&amp;iradid=275988&amp;irpid=1327395&amp;iradtype=ONLINE_TRACKING_LINK&amp;irmptype=mediapartner&amp;mp_value1=&amp;utm_campaign=af_impact_radius_1327395&amp;utm_medium=affiliate&amp;utm_source=impact_radius" class="waves-effect waves-light font-weight-700 purchase"><i class="fa fa-shopping-cart"></i> Purchase</a>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box @if (Request::is('/')) active @endif">
                <i class="fa fa-home"></i>
                <a href="{{ route('get.index') }}">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box @if (Request::is('about')) active @endif">
                <i class="fa fa-user"></i>
                <a href="{{ route('get.about') }}">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box @if (Request::is('portfolio')) active @endif">
                <i class="fa fa-briefcase"></i>
                <a href="{{ route('get.portfolio') }}">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box @if (Request::is('contact')) active @endif">
                <i class="fa fa-envelope-open"></i>
                <a href="{{ route('get.contact') }}">
                    <h2>Contact</h2>
                </a>
            </li>
        </ul>
        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li class="active"><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="{{ route('get.about') }}"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href=""><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                    <li><a href="{{ route('get.contact') }}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
