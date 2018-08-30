<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="Mealplanner2">
  <meta name="author" content="Codefuel Technology">

  <link rel="icon" href="assets/images/favicon.ico">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Messgaes CSS -->
  <link href="{{asset('css/pages/messages.css')}}" rel="stylesheet">

  <!-- Base CSS -->
  <link rel="stylesheet" href="{{asset('css/basestyle/style.css')}}">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Date Range Picker -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/daterangepicker/daterangepicker.css')}}" />

  <!-- Full Calendar Icons -->
  <link href="{{asset('css/fullcalendar/fullcalendar.css')}}" rel="stylesheet">

  <title>Mealplanner2</title>

  @yield('style')

</head>

<body>

  <!-- Pre Loader-->
  <div class="loader-wrapper">
    <div class="spinner">
      <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle class="length" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
          </svg>
      <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
          </svg>
      <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
          </svg>
      <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
            <circle fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
          </svg>
    </div>
  </div>
  <!-- Pre Loader-->

  <section class="wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">
      <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand m-0 py-2 brand-title" href="{{ route('dashboard') }}">{{ config('app.name', 'Mealplanner') }} Admin</a>
        <span></span>
        <a class="navbar-brand py-2 material-icons toggle-sidebar" href="#">menu</a>
      </nav>

      <nav class="navigation">
        <ul>
          <li class="active"><a href="index.html" title="Dashboard"><span class="nav-icon material-icons">public</span> Dashboard</a></li>
          </li>
          <li><a href="#" title="Layout Options"><span class="nav-icon material-icons">person</span> User Master<span class="toogle-sub-nav material-icons">keyboard_arrow_right</span></a>
            <ul class="sub-nav">
              <li><a href="{{ route('register') }}" title="Top Navigation">Add User</a></li>
            <li><a href="{{ route('users') }}" title="Top Navigation">List Users</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>

    <!--RIGHT CONTENT AREA-->
    <div class="content-area">
      <header class="header sticky-top">
        <nav class="navbar navbar-light bg-white px-sm-4 ">
          <a class="navbar-brand py-2 d-md-none  m-0 material-icons toggle-sidebar" href="#">menu</a>
          <ul class="navbar-nav flex-row ml-auto">
            <li class="nav-item ml-sm-3 user-logedin dropdown">
              <a href="#" id="userLogedinDropdown" data-toggle="dropdown" class="nav-link weight-400 dropdown-toggle"><img src="{{ asset('storage/profile/'.Auth::user()->photo) }}" class="mr-2 rounded" width="28">{{ Auth::user()->name }}</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userLogedinDropdown">
                <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">Log Out</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </div>
            </li>
          </ul>
        </nav>
      </header>

      @yield('content')

            <footer class="footer">
              <p class="text-muted m-0"><small class="float-right">Designed and Developed By <a href="http://codefuelindia.com/">Codefuel Technology Pvt. Ltd.</a></small><small>Mealplanner © 2018 - mealplanner.com</small></p>
            </footer>
          </div>
        </div>
      </section>

      <!-- ChartJS -->
      <script src="{{asset('js/chartjs/Chart.js')}}"></script>
      <script src="{{asset('js/chartjs/utils.js')}}"></script>

      <script src="{{asset('js/lib/moment.min.js')}}"></script>
      <script src="{{asset('js/lib/jquery.min.js')}}"></script>
      <script src="{{asset('js/lib/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/chosen-js/chosen.jquery.js')}}"></script>
      <script src="{{asset('js/fullcalendar/fullcalendar.js')}}"></script>

      <script src="{{asset('js/daterangepicker/daterangepicker.min.js')}}"></script>
      <script src="{{asset('js/custom.js')}}"></script>

      <script>
      window.dataLayer = window.dataLayer || [];

      </script>

      @yield('script')

</body>

</html>
