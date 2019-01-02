@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')

    <!-- Inner Banner -->
    <section id="inner-banner-2">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="inner_banner_2_detail">
                        <h2>@lang('labels.frontend.auth.login_box_title') / @lang('labels.frontend.auth.Register')</h2>
                        <p><a href="index.html">Home</a> <i class="fa fa-angle-double-right" aria-hidden="true"></i> Login / Register</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Inner Banner -->

    <!-- Popular Listing -->
    <section id="login-register" class="p_b70 p_t70">
        {{--
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a>
                        </li>
                        <li role="presentation"><a href="#registerd" aria-controls="registerd" role="tab" data-toggle="tab">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        --}}
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="registerd">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="login-register-bg">

                                <div class="row">

                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <div class="heading">
                                            <h2>Create an <span>account</span></h2>
                                        </div>

                                        {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                                            <div class="form-group">
                                                {{ html()->text('first_name')->class('form-control')->placeholder(__('validation.attributes.frontend.first_name'))->attribute('maxlength', 191) }}

                                                {!! $errors->first('first_name','<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group">
                                                {{ html()->text('last_name')->class('form-control')->placeholder(__('validation.attributes.frontend.last_name'))->attribute('maxlength', 191) }}

                                                {!! $errors->first('last_name','<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group">
                                                {{ html()->email('email')->class('form-control')->placeholder(__('validation.attributes.frontend.email'))->attribute('maxlength', 191)->required() }}

                                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group">
                                               {{ html()->password('password')->class('form-control')->placeholder(__('validation.attributes.frontend.password'))->required() }}

                                                {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group">
                                                {{ html()->password('password_confirmation')->class('form-control')->placeholder(__('validation.attributes.frontend.password_confirmation'))->required() }}

                                                {!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
                                            </div>

                                            @if(config('access.captcha.registration'))
                                                <div class="row">
                                                    <div class="col">
                                                        {!! Captcha::display() !!}
                                                        {{ html()->hidden('captcha_status', 'true') }}
                                                    </div><!--col-->
                                                </div><!--row-->
                                            @endif

                                            <div class="form-group">
                                                {{ form_submit(__('labels.frontend.auth.register_button')) }}
                                            </div>
                                            <div class="form-group">
                                                <a href="{{ url('login')}}">Are you a already member ? Login</a>
                                            </div>
                                        {{ html()->form()->close() }}
                                    </div>

                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="social-register-bg">

                                            <h2>Say Hello... </h2>

                                            <p>Don't have an account? Create your account. It's take less then a minutes</p>

                                            <h3>Login with social media</h3>

                                            <ul class="social-register-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection



@push('after-styles')

    <link rel="stylesheet" type="text/css" href="css/master.css">
    <link rel="stylesheet" type="text/css" href="css/color-green.css">
    <link rel="shortcut icon" href="images/short_icon.png">

@endpush


{{-- comment --}}

@prepend('after-scripts')
    <script src="js/jquery.2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery-countTo.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/zelect.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/modernizr.custom.26633.js"></script>
    <script src="js/jquery.gridrotator.js"></script>
    <script src="js/functions.js"></script>
@endprepend

@push('after-scripts')
    @if(config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@endpush
