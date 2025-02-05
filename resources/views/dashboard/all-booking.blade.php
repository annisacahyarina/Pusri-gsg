<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" href="asset/pusri.png">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="asset/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feathericon.min.css') }}">
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
    {{-- NAVIGASI --}}
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
                                class="fa-solid fa-right-from-bracket"></i></span>
                    </a>
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
                        <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span>
                                <span class="menu-arrow"></span></a>
                            <ul class="submenu_class" style="display: none;">
                                <li><a class="active" href="all-booking"> All Booking </a></li>
                                <li><a href="edit-booking"> Booking Approved </a></li>
                                <li><a href="form"> Add Booking </a></li>
                            </ul>
                        </li>
                        <li> <a href="calendar"><i class="fas fa-calendar-alt"></i> <span>Calendar</span></a> </li>
                        <li><a href="register"> <i class="fa-solid fa-user"></i><span> Register Admin</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- TABEL --}}
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mt-5">
                                <h4 class="card-title float-left mt-2">All Booking</h4>
                            </div>
                            {{-- DOWNLOAD DATA FORMAT CSV --}}
                            <div class="text-end">
                                <a href="{{ route('download.csv') }}" class="btn btn-primary">Download CSV</a>
                            </div>
                            <br>
                            {{-- SEARCH BAR --}}
                            <div class="text-start">
                                <form action="search" method="get">
                                    <input type="text" name="search" placeholder="Search with name"
                                        value="{{ @$search }}">
                                    <button>Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body booking_card">
                                <div class="table-responsive">
                                    <table class="datatable table table-stripped table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>No. Telpon</th>
                                                <th>Tanggal Booking</th>
                                                <th>Sewa gedung</th>
                                                <th>Harga</th>
                                                <th>Nama Layanan WO</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Waktu Pemesanan</th>
                                                <th style="padding:auto">Status</th>
                                                <th>Operation</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <td>{{ $loop->iteration }}</td> <!-- Untuk menampilkan nomor urut -->
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->address }}</td>
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
                                                <td><a href={{ 'edit/' . $booking['id'] }}>Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('booking.delete', $booking->id) }}')"
                                                        style="margin-left:8px">Delete</button>
                                                </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Konfirmasi Delete -->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah Anda yakin ingin menghapus data ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <form id="deleteForm" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPT TEMPLATE DAHSBOARD --}}
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        function confirmDelete(actionUrl) {
            // Set action pada form di modal dengan URL dari tombol yang diklik
            document.getElementById('deleteForm').action = actionUrl;

            // Tampilkan modal konfirmasi
            $('#deleteModal').modal('show');
        }
    </script>

</body>

</html>
