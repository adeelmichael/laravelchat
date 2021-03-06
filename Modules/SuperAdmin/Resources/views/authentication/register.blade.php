<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Welcome to OCP</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('josh/css/bootstrap.css') }}">
    <link rel="shortcut icon" href="{{ asset('josh/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('josh/images/favicon.png') }}" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link type="text/css" rel="stylesheet" href="{{asset('josh/vendors/iCheck/css/all.css')}}" />
    <link href="{{ asset('josh/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('josh/css/frontend/register.css') }}">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <!--Content Section Start -->
    <div class="row">
        <div class="box animation flipInX font_size">
            <h2>Online Chat Portal</h2>
            {{--<img src="{{ asset('assets/images/josh-new.png') }}" alt="logo" class="img-responsive mar">--}}
            <h3 class="text-primary">SuperAdmin Sign Up</h3>
            <!-- Notifications -->
            <div id="notific">

            </div>
            <form action="{{ route('superadmin.register') }}" method="POST" id="reg_form">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                    <label class="sr-only"> First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                           value="{!! old('first_name') !!}" >
                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                    <label class="sr-only"> Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                           value="{!! old('last_name') !!}" >
                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->first('email', 'has-error') }}">
                    <label class="sr-only"> Email</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="Email"
                           value="{!! old('Email') !!}" >
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->first('username', 'has-error') }}">
                    <label class="sr-only"> Username</label>
                    <input type="username" class="form-control" id="username" name="username" placeholder="Username">
                    {!! $errors->first('username', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{ $errors->first('password', 'has-error') }}">
                    <label class="sr-only"> Password</label>
                    <input type="password" class="form-control" id="Password1" name="password" placeholder="Password">
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                </div>


                <div class="form-group {{ $errors->first('password_confirm', 'has-error') }}">
                    <label class="sr-only"> Confirm Password</label>
                    <input type="password" class="form-control" id="Password2" name="password_confirm"
                           placeholder="Confirm Password">
                    {!! $errors->first('password_confirm', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="clearfix"></div>
                <div class="form-group {{ $errors->first('gender', 'has-error') }}">
                    <label class="sr-only">Gender</label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio1" value="male"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="inlineRadio2" value="female"> Female
                    </label>
                    {!! $errors->first('gender', '<span class="help-block">:message</span>') !!}
                </div>

                {{--<div class="g-recaptcha" data-sitekey="6LcjimIUAAAAAB2z6COsXDPzyIbflDWMx78jBSF0"></div>--}}
                <button type="submit" class="btn btn-block br-0 btn-primary my-2">Sign Up</button>
                Already have an account? Please <a href="#"> Log In </a>
                Please Read our privacy policy <a href="#"> Privacy Policy
                </a>
            </form>
        </div>
    </div>

    <!-- //Content Section End -->
</div>
<!--global js starts-->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" src="{{ asset('josh/js/app.js') }}"></script>
<script src="{{ asset('josh/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('josh/vendors/iCheck/js/icheck.js') }}"></script>
<script type="text/javascript" src="{{ asset('josh/js/frontend/register_custom.js') }}"></script>
<!--global js end-->
</body>
</html>
