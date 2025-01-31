<style>
    nav{
        z-index: 1000;
        position: flex;
        top: 0;
        left: 0;
        width: 100%;
        font-family: 'Montserrat', sans-serif;

    }
    .nav-item {
    flex-grow: 1;
    max-width: 100%;
    }
    @media (max-width: 768px) {
        body {
            padding-top: 80px; /* Tambahkan ruang lebih untuk navbar di ukuran layar kecil */
            flex-direction: column;
        }
    }
</style>
<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <div class="container-fluid" style="margin: 8px">
        <a class="navbar-brand" href="#">
            <img class="img-nav" src="asset/logo.png" alt="logo"  style="height: 50px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav" style="font-size: 12pt; font-family:; margin-left:10px">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="landingpage" style="color: white">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false" style="color: white">
                        Layanan
                    </a>
                    <ul class="dropdown-menu" style="font-size: 10pt; margin-right:10px" style="color: white">
                        <li><a class="dropdown-item" href="layanangedung">Paket Gedung</a></li>
                        <li><a class="dropdown-item" href="layananwo">Paket WO</a></li>
                    </ul>
                </li>
                <li class="nav-item" style="margin-right:10px">
                    <a class="nav-link" href="faq" style="color: white">F.A.Q</a>
                </li>
                {{-- <li class="nav-item" style="margin-right:10px">
                    <a class="nav-link" href="testimoni" style="color: white">Testimoni</a>
                </li> --}}
                <li class="nav-item" style="margin-right:10px">
                    <a class="nav-link" href="login" style="color: white">Dashboard</a>
                </li>
                </a>
            </ul>
        </div>
    </div>
</nav>
