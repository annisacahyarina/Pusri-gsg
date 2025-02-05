<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="asset/pusri.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan gedung</title>

     <!-- METADATA KONTAK-->
     <meta name="author" content="Annisa Cahyarina">
     <meta name="contact" content="annisacahyarina2004@gmail.com">
     <meta name="phone" content="0878-9972-5978">

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


    {{-- style --}}
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 2vw;
            margin-top: 6vw;
            background-image: url("asset/background.jpg");
        }

        .gambar1 {
            height: 25vw;
            width: 35vw;
            display: flex;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        p {
            font-size: 10pt;
            text-align: justify;
            color: gray;

        }

        ul {
            font-size: 1.3vw;
            text-align: justify;
            color: gray;
            margin-top: 2vw;
        }

        .container {
            background-color: #d4d2d2;
            transform: translateY(4vw);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .card-text {
            font-weight: bold;
            color: black;
            font-size: 1.7vw;
        }

        .card-body {
            background-color: #FFFFFF;
            border: 1px solid #CCCCCC;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);

        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            padding: 20px;
            margin-top: 4.5vw;
            margin-bottom: 5vw
        }

        .gallery-container img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .gallery-container img:hover {
            transform: scale(1.05);
        }

        .gallery-container h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        h2 {
            font-weight: bold;
            text-align: center;
        }

        .container {
            padding: 0.1vw;
        }

        .judul {
            text-align: start
        }

        @media (max-width: 768px) {
            body {
                margin-top: 6vw;
                /* Tambahkan ruang lebih untuk navbar di ukuran layar kecil */
            }

            p {
                font-size: 3vw;
            }

            h2 {
                font-size: 4.5vw
            }

            .btn {
                margin-top: 1px;
                font-size: 10px;

            }

            li {
                font-size: 7pt
            }

            .card-text {
                font-size: 9pt
            }

            h2 {
                font-weight: bold;
                margin-top: 2vw;
                text-align: center;
            }

            .container {
                padding: 0.1vw;
            }

            .gallery-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 15px;
                padding: 20px;
                margin-top: 1vw;
                margin-bottom: 5vw
            }
        }
    </style>
</head>


<body>

    <!-- Bootstrap JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    </div>
    <!-- Navbar -->
    @extends('komponen.navbar')

    {{-- BAGIAN I --}}
    <div class="bagian"></div>
    <div class="d-flex flex-nowrap bd-highlight mb-2" style="padding:3vw">
        <div class="order-1 p-2 bd-highlight">
            {{-- Gambar gedung --}}
            <img class="gambar1" src="asset/tampakdepan.jpg" alt="tampilan depan gedung">
        </div>
        <div class="order-2 p-2 bd-highlight">
            <h2 class="judul" style="font-weight: bold">
                Pusri Grand Ballroom
            </h2>

            {{-- Deskripsi gedung --}}
            <p style="margin-top: 1vw">Pusri Grand Ballroom hadir dengan fasilitas lengkap yang mendukung acara-acara
                besar, mulai dari
                kapasitas hingga 1.200 tamu, AC central, set sofa VIP, sound system, serta kursi dan meja dengan sarung
                elegan. Selain itu, gedung ini dilengkapi ruang tunggu pengantin, ruang catering, toilet terpisah untuk
                pria dan wanita, serta area parkir luas. Keunggulan lain adalah panggung utama, layanan keamanan, dan
                kebersihan yang menjamin kenyamanan setiap acara. Pusri Grand Ballroom menjadi pilihan tepat untuk
                mewujudkan momen istimewa dengan fasilitas premium dan layanan profesional.</p>
            <a href="https://wa.me/6282176561646?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda" target="_blank">
                <button type="button" class="btn btn-success">Chat WhatsApp</button>
            </a>

        </div>
    </div>

    {{-- BAGIAN II-Fasilitas --}}
    <div class="container">
        <h2>
            Fasilitas
        </h2>
    </div>
    <div class="d-flex justify-content-around" style="margin-top:2vw">
        <div class="p-2 bd-highlight">
            <ul>
                <li>Kapasitas 1.200 tamu</li>
                <li>AC Central</li>
                <li>Set sofa VIP</li>
                <li>Round table 10 pcs</li>
                <li>Kursi + sarung kursi + pita 1000 pcs</li>
                <li>Sound system</li>
                <li>Service keamanan + kebersihan</li>
                <li>Screen proyektor</li>
            </ul>
        </div>
        <div class="p-2 bd-highlight">
            <ul>
                <li>Main stage</li>
                <li>Ruang ganti</li>
                <li>Ruang tunggu pengantin</li>
                <li>Ruang catering</li>
                <li>Toilet perempuan & laki-laki</li>
                <li>Area parkir</li>
                <li>Welcoming sign</li>
            </ul>
        </div>
    </div>

    {{-- BAGIAN III-Harga --}}
    <div class="container" style="padding:0.5vw">
        <h2>
            Harga
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-evenly d-flex" style="margin-top: 6vw">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Eksternal</h5>
                        <p class="card-text">Rp 50.000.000</p>
                        <p>harga belum termasuk PPN/event</p>
                        <a href="/form?booking_type=Booking%20Gedung%20Eksternal&price=Rp%2050.000.000"
                            class="btn btn-dark" style="margin-top: 2.2vw">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Khusus keluarga pusri</h5>
                        <p class="card-text">Rp 42.500.000</p>
                        <p>Karyawan/karyawan non organik, anak karyawan/anak pensiunan (1KK). Harga belum termasuk
                            PPN/event</p>
                        <a href="/form?booking_type=Booking%20Gedung%20Keluarga%20Pusri&price=Rp%2042.500.000"
                            class="btn btn-dark">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Weekdays</h5>
                        <p class="card-text">Rp 35.000.000</p>
                        <p>harga khusus untuk acara di hari weekdays dan belum termasuk PPN/event</p>
                        <a href="/form?booking_type=Booking%20Gedung%20Weekdays&price=Rp%2035.000.000"
                            class="btn btn-dark" style="margin-top: 0.7vw">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- BAGIAN IV --}}

    <div class="container">
        <h2>
            Gallery
        </h2>

    </div>
    <div class="gallery-container">
        <img src="asset/tampakdepan.jpg" alt="Foto 1">
        <img src="asset/tampakdalam.jpg" alt="Foto 2">
        <img src="asset/galeri4.png" alt="Foto 3">
        <img src="asset/galeri5.png" alt="Foto 4">
        <img src="asset/galeri6.png" alt="Foto 5">
        <img src="asset/galeri7.png" alt="Foto 6">
        <img src="asset/gedungluas.jpg" alt="Foto 7">
        <img src="asset/ruangfull.png" alt="Foto 8">
        <img src="asset/parkir.jpg" alt="Foto 9">
        <img src="asset/welcomingsign.png" alt="Foto 10">
    </div>
    <script>
        // Efek fade in saat scroll
        const fadeInElements = document.querySelectorAll('.container');

        function fadeInOnScroll() {
            fadeInElements.forEach(element => {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight) {
                    element.classList.add('fade-in');
                }
            });
        }

        window.addEventListener('scroll', fadeInOnScroll);
    </script>

</body>
@include('komponen.footer')


</html>
