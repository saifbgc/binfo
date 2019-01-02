<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
    	
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Skew Soft')">
        <link rel="shortcut icon" href="{{url('resources/images/short_icon.png')}}">
        @yield('meta')
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}
        {{ style(mix('css/binfo.css')) }}

        @stack('after-styles')
    </head>
    <body>
    <div id="app">
        <!-- LOADER -->
    <div class="loader">
      <div class="cssload-svg"><img src="images/42-3.gif" alt="image">
      </div>
    </div>
    <!--LOADER-->

    <!-- HEADER -->
    <header id="main_header_2">
        <div id="header-top">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top-contact">
                            <p>For more info call: <span>+0123 456 78910</span> or write on email: <span>find_do@email.com</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="top_right_links2">
                            <ul class="top_links">
                                <li><a href="{{ url('account') }}"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a> </li>
                                @guest
                                <li><a href="{{ url('login') }}"><i class="fa fa-lock" aria-hidden="true"></i> Login</a> </li>
                                <li><a href="{{ url('register') }}"><i class="fa fa-lock" aria-hidden="true"></i> Register</a> </li>
                                @endguest
                                
                                @auth
                                <li><a href="{{ url('logout') }}"><i class="fa fa-lock" aria-hidden="true"></i> Logout</a> </li>
                                @endauth
                            </ul>
                            <div class="add-listing"> <a href="add-listing.html"><i class="fa fa-plus" aria-hidden="true"></i> Add Listing</a> </div>
                        </div>
                    </div>
                    <div class="top_right_links2-bg"></div>

                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-sticky bootsnav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand sticky_logo" href="{{url('')}}"><img src="images/logo.png" class="logo" alt="">
                            </a>
                        </div>
                        <!-- End Header Navigation -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            
                                <li class="dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                                      <ul class="dropdown-menu">
                                          <li><a href="index.html">Home Style 1</a>
                                          </li>
                                          <li><a href="index-2.html">Home Style 2</a>
                                          </li>
                                          <li><a href="index-3.html">Home Style 3</a>
                                          </li>
                                          <li><a href="index-5.html">Home Style 4</a>
                                          </li>
                                      </ul>
                                  </li>

                                <li class="dropdown active"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Browse Category</a>
                                    <ul class="dropdown-menu">
                                        <li class="active"><a href="restaurant.html">Resturent</a>
                                        </li>
                                        <li><a href="real-estate.html">Real Estate</a>
                                        </li>
                                        <li><a href="sport.html">Sport</a>
                                        </li>
                                        <li><a href="beauty-spa.html">Beauty & Spa</a>
                                        </li>
                                        <li><a href="vehicles.html">Vehicles</a>
                                        </li>
                                        <li><a href="shoping.html">Shoping</a>
                                        </li>
                                        <li><a href="industry.html">Industry</a>
                                        </li>
                                        <li><a href="dating.html">Dating</a>
                                        </li>
                                        <li><a href="job.html">Jobs</a>
                                        </li>
                                    </ul>
                                </li>
      
                                <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Listing</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="listing.html">Listing Style - 1</a>
                                        </li>
                                        <li><a href="listing-2.html">Listing Style - 2</a>
                                        </li>
                                        <li><a href="listing-3.html">Listing Style - 3</a>
                                        </li>
                                        <li><a href="listing-details.html">Listing Details</a>
                                        </li>
                                    </ul>
                                </li>
      
                                <li class="dropdown megamenu-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu megamenu-content" role="menu">
                                        <li>
                                            <div class="row">
      
                                                <div class="col-menu col-md-3">
                                                    <h6 class="title">Homes Style</h6>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="index.html">Home Style 1</a>
                                                            </li>
                                                            <li><a href="index-2.html">Home Style 2</a>
                                                            </li>
                                                            <li><a href="index-3.html">Home Style 3</a>
                                                            </li>
                                                            <li><a href="index-4.html">Home Style 4</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
      
                                                <div class="col-menu col-md-3">
                                                    <h6 class="title">Pages</h6>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="favorites.html">My Favorites</a>
                                                            </li>
                                                            <li><a href="about.html">About Us</a>
                                                            </li>
                                                            <li><a href="add-listing.html">Add New Listing</a>
                                                            </li>
                                                            <li><a href="login-registerd.html">Login / Register</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
      
                                                <div class="col-menu col-md-3">
                                                    <h6 class="title">Pages</h6>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="profile.html">Profile</a>
                                                            </li>
                                                            <li><a href="blog.html">Our Blog</a>
                                                            </li>
                                                            <li><a href="blog-detail.html">Blog Details</a>
                                                            </li>
                                                            <li><a href="contact.html">Contact Us</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-menu col-md-3">
                                                    <h6 class="title">Pages</h6>
                                                    <div class="content">
                                                        <ul class="menu-col">
                                                            <li><a href="packages.html">Packages</a>
                                                            </li>
                                                            <li><a href="faq.html">Faq's</a>
                                                            </li>
                                                            <li><a href="gallery.html">Gallary</a>
                                                            </li>
                                                            <li><a href="error-page.html">Error 404</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
      
                                            </div>
                                        </li>
                                    </ul>
                                </li>
      
                                <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">Contact Us</a>
                                    <ul class="dropdown-menu slideInDown">
                                        <li><a href="contact.html">Contact Us</a>
                                        </li>
                                        <li><a href="contact-map.html">Contact With Map</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- HEADER  -->
        <!-- <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <div class="container">
                @include('includes.partials.messages')
                @yield('content')
            </div>
        </div> -->
    <!-- Footer -->
    <footer id="footer_1" class="bg_blue p_t70 p_b30">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="footer_logo">
                            <img src="images/logo-footer.png" alt="image" />
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                        <ul class="footer_link">
                            <li><a href="index.html">Home</a>
                            </li>
                            <li><a href="listing.html">Browse Category</a>
                            </li>
                            <li><a href="listing-3.html">Listinge</a>
                            </li>
                            <li><a href="blog.html">Our Blog</a>
                            </li>
                            <li><a href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="header-top-links">
                            <div class="social-icons text-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i aria-hidden="true" class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_line"></div>
            </div>
            <div class="footer_botom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-6 col-sm-12">
                            <p>Copyrights © 2017 Find Do Directory. All rights reserved.</p>
                        </div>
                        <div class="col-md-6 col-md-6 col-sm-12 text-right">
                            <p>Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://themeforest.net/user/99_design">99_Design</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->
</div> <!-- #app for vue -->
        @yield('after-footer')
        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        <script src="{{url('js/modernizr.custom.26633.js')}}"></script>
        <script src="{{url('js/jquery.gridrotator.js')}}"></script>
        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
