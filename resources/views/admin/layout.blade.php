<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <title>@yield('page_title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="9VzmlPIHMiydDtICTGdQsbJutj3shtwbC8PLbBbZ">
  
  <link rel="shortcut icon" href="{{asset('admin_assets/favicon.ico')}}">

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin_assets/assets/plugins/%40mdi/font/css/materialdesignicons.min.css')}}">
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin_assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
  <!-- end plugin css -->

   <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin_assets/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
   <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin_assets//assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">

  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="{{asset('admin_assets/css/app.css')}}">
  <!-- end common css -->
  
  </head>
<body data-base-url="">

  <div class="container-scroller" id="app">
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="https://bootstrapdash.com/demo/purple/laravel/template/demo_1">
      <img src="{{asset('assets/images/logo.svg')}}" alt="logo" /> </a>
    <a class="navbar-brand brand-logo-mini" href="https://bootstrapdash.com/demo/purple/laravel/template/demo_1">
      <img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /> </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <div class="search-field d-none d-md-block">
      <form class="d-flex align-items-center h-100" action="#">
        <div class="input-group">
          <div class="input-group-prepend bg-transparent">
            <i class="input-group-text border-0 mdi mdi-magnify"></i>
          </div>
          <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
        </div>
      </form>
    </div>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <div class="nav-profile-img">
            <img src="{{asset('admin_assets/assets/images/faces/face1.jpg')}}" alt="image">
            <span class="availability-status online"></span>
          </div>
          <div class="nav-profile-text">
            <p class="mb-1 text-black font-weight-light">David Greymaax</p>
          </div>
        </a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#">
            <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{url('admin/logout')}}">
            <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-email-outline"></i>
          <span class="count-symbol bg-warning"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <h6 class="p-3 mb-0">Messages</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{asset('assets/images/faces/face4.jpg')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
              <p class="text-gray mb-0"> 1 Minutes ago </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{asset('assets/images/faces/face2.jpg')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
              <p class="text-gray mb-0"> 15 Minutes ago </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="{{asset('assets/images/faces/face3.jpg')}}" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
              <p class="text-gray mb-0"> 18 Minutes ago </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <h6 class="p-3 mb-0 text-center">4 new messages</h6>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell-outline"></i>
          <span class="count-symbol bg-danger"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <h6 class="p-3 mb-0">Notifications</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="mdi mdi-calendar"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
              <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="mdi mdi-settings"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
              <p class="text-gray ellipsis mb-0"> Update dashboard </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="mdi mdi-link-variant"></i>
              </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
              <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
              <p class="text-gray ellipsis mb-0"> New admin wow! </p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <h6 class="p-3 mb-0 text-center">See all notifications</h6>
        </div>
      </li>
      <li class="nav-item nav-logout d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="mdi mdi-power"></i>
        </a>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="mdi mdi-format-line-spacing"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>    
	<div class="container-fluid page-body-wrapper">
    
		<div id="right-sidebar" class="settings-panel">
		  <i class="settings-close mdi mdi-close"></i>
		  <div class="d-flex align-items-center justify-content-between border-bottom">
			<p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
		  </div>
		  <ul class="chat-list">
			<li class="list active">
			  <div class="profile">
				<img src="{{asset('assets/images/faces/face3.jpg')}}" alt="image">
				<span class="online"></span>
			  </div>
			  <div class="info">
				<p>Thomas Douglas</p>
				<p>Available</p>
			  </div>
			  <small class="text-muted my-auto">19 min</small>
			</li>
			<li class="list">
			  <div class="profile">
				<img src="{{asset('assets/images/faces/face2.jpg')}}" alt="image">
				<span class="offline"></span>
			  </div>
			  <div class="info">
				<div class="wrapper d-flex">
				  <p>Catherine</p>
				</div>
				<p>Away</p>
			  </div>
			  <div class="badge badge-success badge-pill my-auto mx-2">4</div>
			  <small class="text-muted my-auto">23 min</small>
			</li>
			<li class="list">
			  <div class="profile">
				<img src="{{asset('assets/images/faces/face3.jpg')}}" alt="image">
				<span class="online"></span>
			  </div>
			  <div class="info">
				<p>Daniel Russell</p>
				<p>Available</p>
			  </div>
			  <small class="text-muted my-auto">14 min</small>
			</li>
			<li class="list">
			  <div class="profile">
				<img src="{{asset('assets/images/faces/face4.jpg')}}" alt="image">
				<span class="offline"></span>
			  </div>
			  <div class="info">
				<p>James Richardson</p>
				<p>Away</p>
			  </div>
			  <small class="text-muted my-auto">2 min</small>
			</li>
			<li class="list">
			  <div class="profile">
				<img src="{{asset('assets/images/faces/face5.jpg')}}" alt="image">
				<span class="online"></span>
			  </div>
			  <div class="info">
				<p>Madeline Kennedy</p>
				<p>Available</p>
			  </div>
			  <small class="text-muted my-auto">5 min</small>
			</li>
			<li class="list">
			  <div class="profile">
				<img src="{{asset('assets/images/faces/face6.jpg')}}" alt="image">
				<span class="online"></span>
			  </div>
			  <div class="info">
				<p>Sarah Graves</p>
				<p>Available</p>
			  </div>
			  <small class="text-muted my-auto">47 min</small>
			</li>
		  </ul>
		</div>     
		
		 <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
		  <ul class="nav">
			<li class="nav-item nav-profile">
			  <a href="#" class="nav-link">
				<div class="nav-profile-image">
				  <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="profile" />
				  <span class="login-status online"></span>
				  <!--change to offline or busy as needed-->
				</div>
				<div class="nav-profile-text d-flex flex-column">
				  <span class="font-weight-bold mb-2">David Grey. H</span>
				  <span class="text-secondary text-small">Project Manager</span>
				</div>
				<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
			  </a>
			</li>
			<li class="nav-item @yield('dashboard_select')">
			  <a class="nav-link" href="{{url('admin/dashboard')}}">
				<span class="menu-title">Dashboard</span>
				<i class="mdi mdi-home menu-icon"></i>
			  </a>
			</li>
			<li class="nav-item @yield('company_select')">
			  <a class="nav-link" href="{{url('admin/company')}}">
				<span class="menu-title">Company</span>
				<i class="mdi mdi-forum menu-icon"></i>
			  </a>
			</li>
			<li class="nav-item @yield('employee_select')">
			  <a class="nav-link" href="{{url('admin/employee')}}">
				<span class="menu-title">Employee</span>
				<i class="mdi mdi-forum menu-icon"></i>
			  </a>
			</li>

			<li class="nav-item ">
			  <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
				<span class="menu-title">Apps</span>
				<i class="menu-arrow"></i>
				<i class="mdi mdi-cart-arrow-down menu-icon"></i>
			  </a>
			  <div class="collapse " id="apps">
				<ul class="nav flex-column sub-menu">
				  <li class="nav-item ">
					<a class="nav-link" href="apps/kanban-board.html">Kanban Board</a>
				  </li>
				  <li class="nav-item ">
					<a class="nav-link" href="apps/todo-list.html">Todo List</a>
				  </li>
				  <li class="nav-item ">
					<a class="nav-link" href="apps/tickets.html">Tickets</a>
				  </li>
				  <li class="nav-item ">
					<a class="nav-link" href="apps/chats.html">Chats</a>
				  </li>
				  <li class="nav-item ">
					<a class="nav-link" href="apps/calendar.html">Calendar</a>
				  </li>
				  <li class="nav-item ">
					<a class="nav-link" href="apps/email.html">Email</a>
				  </li>
				  <li class="nav-item ">
					<a class="nav-link" href="apps/gallery.html">Gallery</a>
				  </li>
				</ul>
			  </div>
			</li>
			
		  </ul>
		</nav>      
	<div class="main-panel">
        <div class="content-wrapper">
			@section('container')
			@show()
		</div>
		
        <footer class="footer">
		  <div class="container-fluid clearfix">
			<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
			</span>
		  </div>
		</footer>      

	</div>
	
    </div>
  </div>

  <!-- base js -->
  
  <script src="{{asset('admin_assets/js/app.js')}}"></script>
  <script src="{{asset('admin_assets/js/custom.js')}}"></script>
  <script src="{{asset('admin_assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <!-- end base js -->

  <!-- plugin js -->
    <script src="{{asset('admin_assets/assets/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/datatables.net/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('admin_assets/assets/plugins/jquery-bar-rating/jquery.barrating.js')}}"></script>
  <!-- end plugin js -->

  <!-- common js -->
  <script src="{{asset('admin_assets/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('admin_assets/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('admin_assets/assets/js/misc.js')}}"></script>
  <script src="{{asset('admin_assets/assets/js/settings.js')}}"></script>
  <script src="{{asset('admin_assets/assets/js/todolist.js')}}"></script>
  <!-- end common js -->

  	<script src="{{asset('admin_assets/assets/js/dashboard.js')}}"></script>
	<script src="{{asset('admin_assets/assets/js/data-table.js')}}"></script>
	<script src="{{asset('admin_assets/assets/js/profile-demo.js')}}"></script>
	
</body>

</html>