@extends('layout')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->

<div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
    style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
    <div class="container">
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab"
                            aria-controls="signin" aria-selected="true">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                            aria-controls="register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="tab-content-5">
                    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                        <form action="{{URL::to('user-login')}}" method="post">
                            {{ csrf_field() }}
                            @foreach($errors->all() as $val)
                            <ul>
                                <li>{{$val}}</li>
                            </ul>
                            @endforeach
                            <?php
	                        use Illuminate\Support\Facades\Session;
	                        $message = Session::get('message');
	                        if($message){
		                        echo '<span class="text-alert" style="color:red;">'.$message.'</span>';
		                    Session::put('message',null);
	                        }
	                        ?>
                            <div class="form-group">
                                <label for="singin-email">Username or email address *</label>
                                <input type="text" class="form-control" id="customer_email" name="customer_email"
                                    required>
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label for="singin-password">Password *</label>
                                <input type="password" class="form-control" id="customer_password"
                                    name="customer_password" required>
                            </div><!-- End .form-group -->

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>LOG IN</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="signin-remember">
                                    <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                </div><!-- End .custom-checkbox -->

                                <a href="#" class="forgot-link">Forgot Your Password?</a>
                            </div><!-- End .form-footer -->
                        </form>
                        <div class="form-choice">
                            <p class="text-center">or sign in with</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-g">
                                        <i class="icon-google"></i>
                                        Login With Google
                                    </a>
                                </div><!-- End .col-6 -->
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-f">
                                        <i class="icon-facebook-f"></i>
                                        Login With Facebook
                                    </a>
                                </div><!-- End .col-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .form-choice -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form action="{{URL::to('register-user')}}" method='post'>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="register-name">Your Name *</label>
                                <input type="text" class="form-control" id="register-name" name="customer_name"
                                    required>
                            </div><!-- End .form-group -->
                            <div class="form-group">
                                <label for="register-email">Your email address *</label>
                                <input type="email" class="form-control" id="register-email" name="customer_email"
                                    required>
                            </div><!-- End .form-group -->
                            <div class="form-group">
                                <label for="register-phone">Phone *</label>
                                <input type="phone" class="form-control" id="register-phone" name="customer_phone"
                                    required>
                            </div><!-- End .form-group -->
                            <div class="form-group">
                                <label for="register-password">Password *</label>
                                <input type="password" class="form-control" id="register-password"
                                    name="customer_password" required>
                            </div><!-- End .form-group -->

                            <div class="form-footer">
                                <button type="submit" class="btn btn-outline-primary-2">
                                    <span>SIGN UP</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>

                            </div><!-- End .form-footer -->
                        </form>
                        <div class="form-choice">
                            <p class="text-center">or sign in with</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login btn-g">
                                        <i class="icon-google"></i>
                                        Login With Google
                                    </a>
                                </div><!-- End .col-6 -->
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-login  btn-f">
                                        <i class="icon-facebook-f"></i>
                                        Login With Facebook
                                    </a>
                                </div><!-- End .col-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .form-choice -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .form-tab -->
        </div><!-- End .form-box -->
    </div><!-- End .container -->
</div><!-- End .login-page section-bg -->
@endsection