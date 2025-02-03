<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dashboard</title>

     <!-- METADATA KONTAK-->
     <meta name="author" content="Annisa Cahyarina">
     <meta name="contact" content="annisacahyarina2004@gmail.com">
     <meta name="phone" content="0878-9972-5978">

    {{-- CSS TEMPLATE DASHBOARD --}}
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feathericon.min.css') }}">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" href="{{ asset('plugins/morris/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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

        td {
            white-space: normal;
            word-wrap: break-word;
            max-width: 200px;
        }
        .small-image {
            width: 100px;
            /* atur lebar sesuai kebutuhan */
            height: auto;
            /* mempertahankan aspek rasio */
        }
    </style>
</head>

<body>
    {{-- NAVIGATION --}}
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a class="logo"> <img src="asset/logo-gelap.png" width="50" height="70" alt="logo"> </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn"> <i class="fa-solid fa-bars"></i> </a>
            <a class="mobile_btn" id="mobile_btn"> <i class="fa-solid fa-bars"></i></a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><i
                                class="fa-solid fa-right-from-bracket"></i></span> </a>
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
                        <li class="active"> <a href="dashboard"><i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a> </li>
                        <li class="list-divider"></li>
                        <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span>
                                <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a href="all-booking"> All Booking </a></li>
                                <li><a href="edit-booking"> Booking Approved </a></li>
                                <li><a href="form"> Add Booking </a></li>
                            </ul>
                        </li>
                        <li> <a href="calendar"><i class="fas fa-calendar-alt"></i>
                                <span>Calendar</span></a> </li>
                        <li><a href="register"><i class="fa-solid fa-user"></i> <span>Register Admin</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- ISI DASHABOARD --}}
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12 mt-5">
                            <h3 class="page-title mt-3"> Halo, {{ Auth::user()->username }}!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card board1 fill">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <div>
                                        <h3 class="card_widget_header">{{ $totalBookings }}</h3>
                                        <h6 class="text-muted">Total Booking</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted">
                                            <i class="fa-solid fa-person"
                                                style="font-size: 30px; margin-right:0.8vw"></i>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card board1 fill">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <div>
                                        <h3 class="card_widget_header">{{ $approvedBookings }}</h3>
                                        <h6 class="text-muted">Booking approved</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted">
                                            <i class="fa-solid fa-circle-check" style="font-size: 30px"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card board1 fill">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <div>
                                        <h3 class="card_widget_header">{{ $notapprovedBookings }}</h3>
                                        <h6 class="text-muted">Booking not approved</h6>
                                    </div>
                                    <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted">
                                            <i class="fa-solid fa-circle-xmark" style="font-size: 30px"></i>
                                        </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- TABEL --}}
                <div class="row">
                    <div class="col-md-12 d-flex">
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title float-left mt-2">Booking not approved</h4>
                                <button type="button" class="btn btn-primary float-right veiwbutton"
                                    onclick="window.location.href='/all-booking'">View All</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No. Telpon</th>
                                                <th>Tanggal Booking</th>
                                                <th>Jenis Pemesanan</th>
                                                <th>Harga</th>
                                                <th>Catatan</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Waktu Pemesanan</th>
                                                <th style="paddin:auto">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <td>{{ $loop->iteration }}</td> <!-- Untuk menampilkan nomor urut -->
                                                <td>{{ $booking->name }}</td>
                                                <td
                                                    style="white-space: normal; word-wrap: break-word;max-width: 200px;">
                                                    {{ $booking->address }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ $booking->booking_date }}</td>
                                                <td>{{ $booking->booking_type }}</td>
                                                <td>{{ $booking->price }}</td>
                                                <td>{{ $booking->catatan }}</td>
                                                <td>
                                                    <img src="{{ asset($booking->image) }}"
                                                        alt="Tidak ada gambar" class="small-image">
                                                </td>
                                                <td>{{ $booking->created_at }}</td>
                                                <td>{{ $booking->status }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPT UNTUK TEMPLATE DASHBOARD --}}
    <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('js/chart.morris.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
