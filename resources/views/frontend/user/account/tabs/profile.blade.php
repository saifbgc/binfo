@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.profile'))

@section('content')

    <!-- Inner Banner -->
    <section id="inner-banner-2">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="inner_banner_2_detail">
                        <h2>Profile</h2>
                        <p><a href="index.html">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Profile</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Inner Banner -->

    <!-- Profile -->
    <section id="profile" class="p_b70 p_t70 bg_lightgry">
        {!! Form::open(['url' => 'profile/update','method'=>'POST', 'files' => true]) !!}
        @method('PATCH')
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-3 col-xs-12">

                    <div class="profile-leftbar">
                        <div id="profile-picture" class="profile-picture dropzone dz-clickable">
                            <input name="file" type="file">
                            <div class="dz-default dz-message"><span>Click or drop<br>picture here</span>
                            </div>
                            <img src="" alt="">
                            <!-- <img src="images/profile.jpg" alt=""> -->
                        </div>
                    </div>

                    <div class="profile-list">
                        <ul>
                            <li class="active">
                                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sliders" aria-hidden="true"></i> Listing</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i> Add New Listing</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> Messages</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Reviews</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-server" aria-hidden="true"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-lock" aria-hidden="true"></i> Log Out</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">

                    <div class="profile-login-bg">
                        <h2><span><i class="fa fa-user"></i></span> Personal <span>Info</span></h2>
                        <div class="row p_b30">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="name">@lang('labels.frontend.user.profile.name')</label>
                                    <input class="form-control" id="name" name="name" value="{{ $logged_in_user->name }}" type="text">
                                </div>
                                <!--/.form-group-->
                            </div>
                            <!--/.col-md-3-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="email">@lang('labels.frontend.user.profile.email')</label>
                                    <input class="form-control" id="email" name="email" value="{{ $logged_in_user->email }}" type="email">
                                </div>
                                <!--/.form-group-->
                            </div>
                            <!--/.col-md-3-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="email">@lang('labels.frontend.user.profile.created_at')</label>
                                    <input class="form-control" id="email" value="{{ timezone()->convertToLocal($logged_in_user->created_at) }} ({{ $logged_in_user->created_at->diffForHumans() }})" type="text" disabled="">
                                </div>
                                <!--/.form-group-->
                            </div>
                            <!--/.col-md-3-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="email">@lang('labels.frontend.user.profile.last_updated')</label>
                                    <input class="form-control" id="email" value="{{ timezone()->convertToLocal($logged_in_user->updated_at) }} ({{ $logged_in_user->updated_at->diffForHumans() }})" type="text" disabled="">
                                </div>
                                <!--/.form-group-->
                            </div>
                            <!--/.col-md-3-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input class="form-control" id="mobile" name="mobile" value="{{ $logged_in_user->mobile }}" type="text">
                                </div>
                                <!--/.form-group-->
                            </div>
                            <!--/.col-md-3-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" id="phone" name="phone" value="{{ $logged_in_user->phone }}" type="text">
                                </div>
                                <!--/.form-group-->
                            </div>
                            <!--/.col-md-3-->
                        </div>

                        <h2><span><i class="fa fa-map-marker"></i></span> Address</h2>

                        <div class="form-group">
                            <label for="city">City</label>
                            <input class="form-control" id="city" name="city" value="{{ $logged_in_user->city }}" type="text">
                        </div>
                        <!--/.form-group-->
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input class="form-control" id="street" name="street" value="{{ $logged_in_user->street }}" type="text">
                                </div>
                                <!--/.form-group-->
                            </div>
                            <!--/.col-md-8-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="zip">ZIP</label>
                                    <input class="form-control" id="zip" name="zip" value="{{ $logged_in_user->zip }} " type="text">
                                </div>
                                <!--/.form-group-->
                            </div>
                        </div>
                        <!--/.col-md-3-->
                        <div class="form-group p_b30">
                            <label for="additional-address">Additional Address Line</label>
                            <input class="form-control" id="additional-address" value="{{ $logged_in_user->address }} " name="additional-address" type="text">
                        </div>
                        <!--/.form-group-->

                        <h2><span><i class="fa fa-map-marker"></i></span> About <span>Me</span></h2>

                        <div class="form-group">
                            <label for="about-me">Some Words About Me</label>
                            <div class="form-group">
                                <textarea class="form-control" id="about-me" rows="3" name="about-me" required="">{{ $logged_in_user->about }}</textarea>
                            </div>
                            <!--/.form-group-->
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-large btn-default" id="submit">Save Changes</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </section>
@endsection



@push('after-styles')

    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" type="text/css" href="css/color-green.css">
    <link rel="shortcut icon" href="images/short_icon.png">

@endpush


{{-- comment --}}

@prepend('after-scripts')
    <script src="js/dropzone.min.js"></script>
@endprepend


