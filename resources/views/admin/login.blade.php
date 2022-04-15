<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="UFj3D7BSiekpyBPuRnVd1vycgk4L3zg5qgonXy5U">
  
  <link rel="shortcut icon" href="{{URL('admin_assets/favicon.ico')}}">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{url('admin_assets/assets/plugins/%40mdi/font/css/materialdesignicons.min.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{url('admin_assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{url('admin_assets/css/app.css')}}">
  <!-- end common css -->

  </head>
<body data-base-url="">

  <div class="container-scroller" id="app">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      
<div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
  <div class="row flex-grow">
    <div class="col-lg-6 d-flex align-items-center justify-content-center">
      <div class="auth-form-transparent text-left p-3">
        <div class="brand-logo">
          <img src="{{url('admin_assets/assets/images/logo.svg')}}" alt="logo">
			  {{Config::get('constant.SITE_NAME')}}
        </div>
        <h4>Welcome back!</h4>
        <h6 class="font-weight-light">Happy to see you again!</h6>
        <form class="pt-3 cmxform" id="commentForm" method="post" action="{{route('admin.auth')}}">
		      @csrf
          <div class="form-group">
            <label for="exampleInputEmail">Username</label>
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <span class="input-group-text bg-transparent border-right-0">
                  <i class="mdi mdi-account-outline text-primary"></i>
                </span>
              </div>
              <input type="text" id="cemail" name="email" class="form-control form-control-lg border-left-0" id="" placeholder="email" required>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <span class="input-group-text bg-transparent border-right-0">
                  <i class="mdi mdi-lock-outline text-primary"></i>
                </span>
              </div>
              <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" required>
            </div>
          </div>
          <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input"><i class="input-helper"></i> Keep me signed in </label>
            </div>
            <a href="#" class="auth-link text-black">Forgot password?</a>
          </div>
          <div class="my-3">
            <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
          </div>
      
          @if(session()->has('error'))
          <div class="alert with-close alert-fill-danger" role="alert">
              <i class="mdi mdi-alert-circle"></i>{{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
              <span aria-hidden="true">x</span>
            </button>
          </div>
          @endif
          <div class="mb-2 d-flex">
            <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
              <i class="mdi mdi-facebook mr-2"></i>Facebook </button>
            <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
              <i class="mdi mdi-google mr-2"></i>Google </button>
          </div>
          <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="" class="text-primary">Create</a>
          </div>
        </form>
      </div>
    </div>
    <div class="col-lg-6 d-flex flex-row">
        <div class="slide-image" style="background-image: url({{url('admin_assets/assets/images/auth/login-bg.jpg')}}); background-size: cover;">
          <p class="slide-content">Copyright &copy; 2018 All rights reserved.</p>
        </div> 
    </div>
  </div>
</div>

    </div>
  </div>

    <!-- base js -->
    <script src="{{url('admin_assets/js/app.js')}}"></script>
	<script src="{{url('admin_assets/assets/js/form-validation.js')}}"></script>
  <script src="{{url('admin_assets/assets/js/bt-maxlength.js')}}"></script>
    <!-- end base js -->

    <!-- plugin js -->
	 <!-- plugin js -->
    <script src="{{url('admin_assets/assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{url('admin_assets/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
  <!-- end plugin js -->
        <!-- end plugin js -->

    </body>


</html>