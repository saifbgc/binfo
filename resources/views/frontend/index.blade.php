@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <!-- Banner -->
    <section id="banner-2" class="animated-bg banner-2-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="advance-search_banner">
                        <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Advance Search</a>
                    </div>
                </div>
            </div>

            <div class="collapse" id="collapseExample">
                <div class="well">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner-search">
                                <div class="advance-search">
                                    <div class="group-button-search">
                                        <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter"> <i class="fa fa-bars" aria-hidden="true"></i> </a>
                                    </div>
                                    <div class="dir-search">
                                        <div class="single-query form-group">
                                            <input type="text" class="keyword-input" placeholder="Enter keyword..." required>
                                        </div>
                                        <div class="single-query form-group">
                                            <div class="intro">
                                                <select>
                                                    <option selected="" value="any"> Location...</option>
                                                    <option>Location - 1</option>
                                                    <option>Location - 2</option>
                                                    <option>Location - 3</option>
                                                    <option>Location - 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-query form-group">
                                            <div class="intro">
                                                <select>
                                                    <option class="active">Category...</option>
                                                    <option>Resturent</option>
                                                    <option>Real Estate</option>
                                                    <option>Sport</option>
                                                    <option>Beauty & Spa</option>
                                                    <option>Vehicles</option>
                                                    <option>Shoping</option>
                                                    <option>Industry</option>
                                                    <option>Dating</option>
                                                    <option>Jobs</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-btn">
                                        <button>Search <i class="fa fa-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-propertie-filters collapse">
                        <div class="container-2">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Wifi</span> </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Park</span> </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Schools</span> </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Grounds</span> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Masque</span> </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Hospitals</span> </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Transport</span> </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="search-form-group white">
                                        <input type="checkbox" name="check-box" />
                                        <span>Security</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="banner-text">
                        <h2>well come in <span>find do </span>directory</h2>
                        <p>Expolore top-rated attractions, activities and more..!</p>
                        <a href="about.html">Read More</a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12"></div>
            </div>
        </div>

    </section>
    <!-- Banner -->

    <!-- Directory Category -->
    <section id="directory-category" class="p_b70 p_t70">
        <div class="container">
            <div class="row">
                <div class="col-md-12 directory-category-heading">
                    <h2>Directory <span>Category</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="directory-category-slider" class="owl-carousel owl-theme">

                        <div class="item">
                            <div class="directory-category-box text-center resturent"> <span><i class="fa fa-glass" aria-hidden="true"></i></span>
                                <a href="restaurant.html">
                                    <h3>Resturent</h3>
                                </a>
                                <p>152,546</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center real-estate"> <span><i class="fa fa-home" aria-hidden="true"></i></span>
                                <a href="real-estate.html">
                                    <h3>Real Estate</h3>
                                </a>
                                <p>35,366</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center sport"> <span><i class="fa fa-futbol-o" aria-hidden="true"></i></span>
                                <a href="sport.html">
                                    <h3>Sport</h3>
                                </a>
                                <p>2,546</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center beauty"> <span><i class="fa fa-female" aria-hidden="true"></i></span>
                                <a href="beauty-spa.html">
                                    <h3>Beauty & Spa</h3>
                                </a>
                                <p>1,546</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center vehicles"> <span><i class="fa fa-car" aria-hidden="true"></i></span>
                                <a href="vehicles.html">
                                    <h3>Vehicles</h3>
                                </a>
                                <p>2, 34, 546</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center shoping"> <span><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                                <a href="shoping.html">
                                    <h3>Shoping</h3>
                                </a>
                                <p>2,546</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center industry"> <span><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                <a href="industry.html">
                                    <h3>Industry</h3>
                                </a>
                                <p>3,506</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center dating"> <span><i class="fa fa-heart" aria-hidden="true"></i></span>
                                <a href="dating.html">
                                    <h3>Dating</h3>
                                </a>
                                <p>12,546</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center jobs"> <span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
                                <a href="job.html">
                                    <h3>Jobs</h3>
                                </a>
                                <p>22,546</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="directory-category-box text-center other-services"> <span><i class="fa fa-globe" aria-hidden="true"></i></span>
                                <a href="job.html">
                                    <h3>Other Services</h3>
                                </a>
                                <p>24,567</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Directory Category -->

    <!-- Popular Listing -->
    <section id="popular-listing" class="p_t70 over-hide-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading">
                    <h2>Popular <span>Listings</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="sort-by">
                        <div class="sort-category"> <span>Sort by</span>
                            <div class="single-query form-group">
                                <div class="intro">
                                    <select>
                                        <option class="active">Most Popular</option>
                                        <option>Most Recent</option>
                                        <option>The Latest</option>
                                        <option>The Best Rating</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="nav nav-tabs sort-listing" role="tablist">
                                <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th" aria-hidden="true"></i></a>
                                </li>
                                <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                </li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="profile">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-1.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="restaurant.html">Restaurant</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-2.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="real-estate.html">Real Estate</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-3.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="sport.html">Sport</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-4.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="beauty-spa.html">Beauty & Spa</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-5.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="shoping.html">Shoping</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-6.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="dating.html">Dating</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="home">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-3-1.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="restaurant.html">Restaurant</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-3-2.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="sport.html">Sport</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-3-3.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="shoping.html">Shoping</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="popular-listing-box">
                                        <div class="popular-listing-img">
                                            <figure class="effect-ming"> <img src="images/popular-3-4.jpg" alt="image">
                                                <figcaption>
                                                    <ul>
                                                        <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                        <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="popular-listing-detail">
                                            <h3><a href="real-estate.html">Real Estate</a></h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        </div>
                                        <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="popular-listing-box">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="popular-listing-img">
                                                    <figure class="effect-ming"> <img src="images/popular-3-1.jpg" alt="image">
                                                        <figcaption>
                                                            <ul>
                                                                <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                            </ul>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="popular-listing-detail">
                                                    <h3><a href="restaurant.html">Restaurant</a></h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                                <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="popular-listing-box">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="popular-listing-img">
                                                    <figure class="effect-ming"> <img src="images/popular-3-2.jpg" alt="image">
                                                        <figcaption>
                                                            <ul>
                                                                <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                            </ul>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="popular-listing-detail">
                                                    <h3><a href="sport.html">Sport</a></h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                                <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="popular-listing-box">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="popular-listing-img">
                                                    <figure class="effect-ming"> <img src="images/popular-3-3.jpg" alt="image">
                                                        <figcaption>
                                                            <ul>
                                                                <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                            </ul>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="popular-listing-detail">
                                                    <h3><a href="shoping.html">Shoping</a></h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                                <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="popular-listing-box">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-12">
                                                <div class="popular-listing-img">
                                                    <figure class="effect-ming"> <img src="images/popular-3-4.jpg" alt="image">
                                                        <figcaption>
                                                            <ul>
                                                                <li><a href="#!"><i class="fa fa-heart" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-map-marker" aria-hidden="true"></i></a> </li>
                                                                <li><a href="#!"><i class="fa fa-reply" aria-hidden="true"></i></a> </li>
                                                            </ul>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-12">
                                                <div class="popular-listing-detail">
                                                    <h3><a href="real-estate.html">Real Estate</a></h3>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                                <div class="popular-listing-add"> <span><i class="fa fa-map-marker" aria-hidden="true"></i> New York City</span> <span><img src="images/stars.png" alt="image"></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="right-bar">
                        <h4>Signup <span>Now</span></h4>
                        <form class="form-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="name"> I am agree with term and conditions</label>
                            </div>
                            <div class="form-group">
                                <button>Sign up Now</button>
                            </div>
                        </form>
                    </div>
                    <div class="right-bar">
                        <h4>Recent add <span>Listing</span></h4>
                        <div id="recent-listing" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="recent-listing-img">
                                    <img src="images/recent-1.jpg" alt="image">
                                    <div class="recent-listing-links">
                                        <a href="#" class="recent-jobs">Jobs</a>
                                        <a href="#" class="recent-readmore">Read More</a>
                                    </div>
                                </div>
                                <div class="recent-listing-img">
                                    <img src="images/recent-2.jpg" alt="image">
                                    <div class="recent-listing-links">
                                        <a href="#" class="recent-jobs">Real Estate</a>
                                        <a href="#" class="recent-readmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="recent-listing-img">
                                    <img src="images/recent-1.jpg" alt="image">
                                    <div class="recent-listing-links">
                                        <a href="#" class="recent-jobs">Jobs</a>
                                        <a href="#" class="recent-readmore">Read More</a>
                                    </div>
                                </div>
                                <div class="recent-listing-img">
                                    <img src="images/recent-2.jpg" alt="image">
                                    <div class="recent-listing-links">
                                        <a href="#" class="recent-jobs">Real Estate</a>
                                        <a href="#" class="recent-readmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="recent-listing-img">
                                    <img src="images/recent-1.jpg" alt="image">
                                    <div class="recent-listing-links">
                                        <a href="#" class="recent-jobs">Jobs</a>
                                        <a href="#" class="recent-readmore">Read More</a>
                                    </div>
                                </div>
                                <div class="recent-listing-img">
                                    <img src="images/recent-2.jpg" alt="image">
                                    <div class="recent-listing-links">
                                        <a href="#" class="recent-jobs">Real Estate</a>
                                        <a href="#" class="recent-readmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Listing -->

    <!-- Most visited places -->
    <section id="post-visited-places">

        <div class="container over-hide">

            <div class="row">
                <div class="col-md-12 heading text-center">
                    <h2>Most <span>Visited</span> Places</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utet dolore magna aliqua. Ut enim ad minim veniam</p>
                </div>
            </div>

            <div class="row">
                <div id="places-slider" class="owl-carousel owl-theme">

                    <div class="item">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                <figure class="effect-ming"> <img src="images/most-visit-1.jpg" alt="image">
                                    <figcaption>
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="popular-listing-detail">
                                <h3><a href="listing-details.html">Four Seasons Hotel New York</a></h3>
                                <span>Category: <a href="restaurant.html">Hotel</a></span>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 57 East 57th Street, New York 10022</p>
                            </div>

                            <ul class="place-listing-add">
                                <li>(31 reviews) </li>
                                <li><img src="images/stars.png" alt="image">
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="item">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                <figure class="effect-ming"> <img src="images/most-visit-2.jpg" alt="image">
                                    <figcaption>
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="popular-listing-detail">
                                <h3><a href="listing-details.html">Metropolitan Museum of Art</a></h3>
                                <span>Category: <a href="shoping.html">Shoping</a></span>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1000 5th Ave, New York, NY 10028</p>
                            </div>

                            <ul class="place-listing-add">
                                <li>(45 reviews) </li>
                                <li><img src="images/stars.png" alt="image">
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="item">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                <figure class="effect-ming"> <img src="images/most-visit-3.jpg" alt="image">
                                    <figcaption>
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="popular-listing-detail">
                                <h3><a href="listing-details.html">Beaches NYC Area</a></h3>
                                <span>Category: <a href="dating.html">Dating</a></span>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 36 W 44th St, New York, NY</p>
                            </div>

                            <ul class="place-listing-add">
                                <li>(75 reviews) </li>
                                <li><img src="images/stars.png" alt="image">
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="item">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                <figure class="effect-ming"> <img src="images/most-visit-1.jpg" alt="image">
                                    <figcaption>
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="popular-listing-detail">
                                <h3><a href="listing-details.html">Four Seasons Hotel New York</a></h3>
                                <span>Category: <a href="restaurant.html">Hotel</a></span>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 57 East 57th Street, New York 10022</p>
                            </div>

                            <ul class="place-listing-add">
                                <li>(31 reviews) </li>
                                <li><img src="images/stars.png" alt="image">
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="item">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                <figure class="effect-ming"> <img src="images/most-visit-2.jpg" alt="image">
                                    <figcaption>
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="popular-listing-detail">
                                <h3><a href="listing-details.html">Metropolitan Museum of Art</a></h3>
                                <span>Category: <a href="shoping.html">Shoping</a></span>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1000 5th Ave, New York, NY 10028</p>
                            </div>

                            <ul class="place-listing-add">
                                <li>(45 reviews) </li>
                                <li><img src="images/stars.png" alt="image">
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="item">
                        <div class="popular-listing-box">
                            <div class="popular-listing-img">
                                <figure class="effect-ming"> <img src="images/most-visit-3.jpg" alt="image">
                                    <figcaption>
                                        <ul>
                                            <li><a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>

                            <div class="popular-listing-detail">
                                <h3><a href="listing-details.html">Beaches NYC Area</a></h3>
                                <span>Category: <a href="dating.html">Dating</a></span>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 36 W 44th St, New York, NY</p>
                            </div>

                            <ul class="place-listing-add">
                                <li>(75 reviews) </li>
                                <li><img src="images/stars.png" alt="image">
                                </li>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center discover">
                    <h2>Discover top-rated local businesses</h2>
                    <a href="#">Buy Now</a>
                </div>
            </div>

        </div>

    </section>
    <!-- Most visited places -->

    <!-- Counter Section -->
    <div id="counter-section">
        <div class="container">

            <div class="row number-counters text-center">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- first count item -->
                    <div class="counters-item">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <strong data-to="520">0</strong>
                        <p>Listing</p>
                        <div class="border-inner"></div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- first count item -->
                    <div class="counters-item">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <strong data-to="5620">0</strong>
                        <p>User</p>
                        <div class="border-inner"></div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- first count item -->
                    <div class="counters-item">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <strong data-to="1520">0</strong>
                        <p>Categories</p>
                        <div class="border-inner"></div>
                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- first count item -->
                    <div class="counters-item">
                        <i class="fa fa-th-list" aria-hidden="true"></i>
                        <!-- Set Your Number here. i,e. data-to="56" -->
                        <strong data-to="5020">0</strong>
                        <p>Listing Types</p>
                        <div class="border-inner"></div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- Counter Section -->

    <!-- Best Things -->
    <section id="best-things">
        <div class="container">

            <div class="row">
                <div class="col-md-12 heading">
                    <h2>Explore <span>Locations</span></h2>
                </div>
            </div>

            <div class="row">

                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="best-things-details">
                        <figure class="effect-ming"> <img src="images/best-thing-7.jpg" alt="image">
                            <figcaption>
                                <ul>
                                    <li>
                                        <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>

                        <div class="best-things-rating">
                            <div class="best-things-address">
                                <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Germany</h3>
                                <ul class="best-things-listing">
                                    <li><a href="#">15 Cities,</a>
                                    </li>
                                    <li><a href="#">130 listings,</a>
                                    </li>
                                    <li><a href="#">View 6753</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="best-things-stars">
                                <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="best-things-details">
                        <figure class="effect-ming"> <img src="images/best-thing-6.jpg" alt="image">
                            <figcaption>
                                <ul>
                                    <li>
                                        <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>

                        <div class="best-things-rating">
                            <div class="best-things-address">
                                <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Australia</h3>
                                <ul class="best-things-listing">
                                    <li><a href="#">15 Cities,</a>
                                    </li>
                                    <li><a href="#">130 listings,</a>
                                    </li>
                                    <li><a href="#">View 6753</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="best-things-stars">
                                <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="best-things-details">
                        <figure class="effect-ming"> <img src="images/best-thing-2.jpg" alt="image">
                            <figcaption>
                                <ul>
                                    <li>
                                        <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>

                        <div class="best-things-rating">
                            <div class="best-things-address">
                                <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> China</h3>
                                <ul class="best-things-listing">
                                    <li><a href="#">15 Cities,</a>
                                    </li>
                                    <li><a href="#">130 listings,</a>
                                    </li>
                                    <li><a href="#">View 6753</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="best-things-stars">
                                <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="best-things-details">
                        <figure class="effect-ming"> <img src="images/best-thing-1.jpg" alt="image">
                            <figcaption>
                                <ul>
                                    <li>
                                        <a data-toggle="modal" data-target="#myModal" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>

                        <div class="best-things-rating">
                            <div class="best-things-address">
                                <h3><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> United State</h3>
                                <ul class="best-things-listing">
                                    <li><a href="#">15 Cities,</a>
                                    </li>
                                    <li><a href="#">130 listings,</a>
                                    </li>
                                    <li><a href="#">View 6753</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="best-things-stars">
                                <span>4.5 <img src="images/stars-2.png" alt="img"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Best Things -->

    <!-- Latest News -->
    <section id="our-blog" class="p_t70 p_b70">
        <div class="container">

            <div class="row">

                <div class="col-md-8 col-sm-8 col-xs-12">

                    <div class="row">
                        <div class="col-md-12 heading">
                            <h2>Latest <span>News</span></h2>
                        </div>
                    </div>

                    <div id="latest_news-slider" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="latest_box">
                                <h3>Take me out of country</h3>
                                <p>Aliquam ultrices venenatis mauris. Vestibulum ante ipsum primis in faucibus...</p>
                                <div class="lates_border m-b-25"></div>
                                <img src="images/latest_news.png" alt="image">
                                <span>by Margaret R. Rose</span>
                                <span><i class="fa fa-calculator" aria-hidden="true"></i>01 Oct 2017</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest_box">
                                <h3>Take me out of country</h3>
                                <p>Aliquam ultrices venenatis mauris. Vestibulum ante ipsum primis in faucibus...</p>
                                <div class="lates_border m-b-25"></div>
                                <img src="images/latest_news.png" alt="image">
                                <span>by Margaret R. Rose</span>
                                <span><i class="fa fa-calculator" aria-hidden="true"></i>01 Oct 2017</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest_box">
                                <h3>Take me out of country</h3>
                                <p>Aliquam ultrices venenatis mauris. Vestibulum ante ipsum primis in faucibus...</p>
                                <div class="lates_border m-b-25"></div>
                                <img src="images/latest_news.png" alt="image">
                                <span>by Margaret R. Rose</span>
                                <span><i class="fa fa-calculator" aria-hidden="true"></i>01 Oct 2017</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest_box">
                                <h3>Take me out of country</h3>
                                <p>Aliquam ultrices venenatis mauris. Vestibulum ante ipsum primis in faucibus...</p>
                                <div class="lates_border m-b-25"></div>
                                <img src="images/latest_news.png" alt="image">
                                <span>by Margaret R. Rose</span>
                                <span><i class="fa fa-calculator" aria-hidden="true"></i>01 Oct 2017</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest_box">
                                <h3>Take me out of country</h3>
                                <p>Aliquam ultrices venenatis mauris. Vestibulum ante ipsum primis in faucibus...</p>
                                <div class="lates_border m-b-25"></div>
                                <img src="images/latest_news.png" alt="image">
                                <span>by Margaret R. Rose</span>
                                <span><i class="fa fa-calculator" aria-hidden="true"></i>01 Oct 2017</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="latest_box">
                                <h3>Take me out of country</h3>
                                <p>Aliquam ultrices venenatis mauris. Vestibulum ante ipsum primis in faucibus...</p>
                                <div class="lates_border m-b-25"></div>
                                <img src="images/latest_news.png" alt="image">
                                <span>by Margaret R. Rose</span>
                                <span><i class="fa fa-calculator" aria-hidden="true"></i>01 Oct 2017</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                    <div class="row">
                        <div class="col-md-12 heading">
                            <h2>Keep up  <span>to date</span></h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="updates">
                                <div class="over_image"><img src="images/update_bg.png" alt="image" />
                                </div>

                                <p class="p_b20">Subscribe to our newsletters to receive latest news and updates. </p>
                                <form class="p-t-25">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-md-10">
                                        <input type="email" class="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-2">
                                        <input type="submit" class="submit" value="">
                                        <span><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Latest News -->

    <!-- User -->
    <section id="our-user" class="p_t70 p_b70">
        <div class="container">

            <div class="row">

                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 heading">
                            <h2>Join <span>12,093</span> User</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12 user-btn">
                    <a href="login-registerd.html">Join Now</a>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div id="ri-grid" class="ri-grid ri-grid-size-1 ri-shadow">
                        <ul>
                            <li>
                                <a href="#"><img src="images/medium/1.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/2.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/3.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/4.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/5.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/6.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/7.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/8.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/9.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/10.jpg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/11.jpg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/12.jpg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/13.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/14.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/15.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/16.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/17.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/18.jpg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/19.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/20.jpg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/21.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/22.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/23.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/24.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/25.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/26.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/27.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/28.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/29.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/30.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/31.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/32.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/33.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/34.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/35.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/36.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/37.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/38.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/39.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/40.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/41.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/42.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/43.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/44.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/45.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/46.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/47.jpg" alt="image" />
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/48.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/49.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/50.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/51.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/52.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/53.jpg" alt="image"/>
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="images/medium/54.jpg" alt="image"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Useer -->
@endsection
