<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Calendar</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feathericon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<!-- CDN Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

<style>
    a {
        text-decoration: none;
    }
    body {
        font-family: 'Montserrat', sans-serif;
    }
</style>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a class="logo"> <img src="asset/logo-gelap.png" width="50" height="70" alt="logo"> </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn"> <i class="fa-solid fa-bars"></i> </a>
            <a class="mobile_btn" id="mobile_btn"> <i class="fa-solid fa-bars"></i></a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span
                            class="user-img"><i class="fa-solid fa-right-from-bracket"></i></span> </a>
                            <div class="dropdown-menu">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log Out</button>
                                </form>
                            </div>
                </li>
            </ul>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
						<li> <a href="dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-booking"> All Booking </a></li>
								<li><a href="edit-booking"> Booking Approved </a></li>
								<li><a href="form"> Add Booking </a></li>
							</ul>
                        </li>
                        <li class="active"> <a href="calendar"><i class="fas fa-calendar-alt"></i>
                                <span>Calendar</span></a> </li>
                        <li><a href="register"><i class="fa-solid fa-user"></i> <span>Register Admin</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mt-5">
                                <h4 class="card-title float-left mt-2" >Calendar</h4>
                                <button type="button" class="btn btn-primary float-right veiwbutton" onclick="window.location.href='https://calendar.google.com/calendar/u/0/r/month/2025/7/1?cid=bWVsc2FheXBAZ21haWwuY29t'">
                                    Add Event
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-8">
                    <div class="card">
                        <div class="card-body">

                            <iframe src="https://calendar.google.com/calendar/embed?src=melsaayp%40gmail.com&ctz=Asia%2FJakarta" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('plugins/fullcalendar/jquery.fullcalendar.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
