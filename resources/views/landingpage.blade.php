<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <title>Pusri Grand Ballroom</title>

    <!-- METADATA KONTAK-->
    <meta name="author" content="Annisa Cahyarina">
    <meta name="contact" content="annisacahyarina2004@gmail.com">
    <meta name="phone" content="0878-9972-5978">


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
    .body {
        font-family: 'Montserrat', sans-serif;
        font-size: 2vw;

    }

    .description,
    .description-2 {
        text-align: center;
        padding: 4vw;
        opacity: 0;
        transform: translateY(4vw);
        transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .h2 {
        font-weight: bold;
    }

    .p {
        padding: 2vw;

    }

    .container {
        display: flex;
        justify-content: space-between;
        gap: 12px;
        font-family: 'Montserrat', sans-serif;
        text-align: left;

    }

    .image-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
        margin-right: 3vw;
    }

    .image-card:hover {
        transform: scale(1.3);
    }

    .image-card img {
        width: 25vw;
        height: 100%;
        display: block;
        transition: transform 0.3s ease;

    }

    .image-card:hover img {
        transform: scale(1.0);
    }

    .caption {
        font-family: 'Montserrat', sans-serif;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 1vw;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        text-align: center;
        font-size: 2vw;
    }

    .container-btn {
        text-align: center;
        padding: 3.5vw;
    }

    .btn-selengkapnya {
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        font-size: 2vw;
        color: #6E5656;
        font-weight: bold;
        border: #6E5656;
        background: white;
    }

    .btn-selengkapnya:hover {
        transform: scale(1.1);
        /* Zoom in ketika disentuh */
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        width: 400px;
        height: 300px;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .container-lokasi {
        position: relative;
        padding-bottom: 1vw;
    }

    /* Pseudo-element untuk background dengan opacity */
    .container-lokasi::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('asset/marble.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.3;
        /* Atur opacity di sini */
        z-index: 0;
    }

    /* Konten di atas background */
    .container-lokasi>* {
        position: relative;
        z-index: 1;
    }

    /* Efek Fade In */
    .fade-in {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive untuk layar kecil (mobile) */
    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: center;
        }

        .image-card img {
            width: 100%;
            height: auto;
        }

        .description,
        .description-2 {
            text-align: justify;
        }

        .gmap_canvas {
            padding-bottom: 30vw;

        }

        .canvas,
        .container,
        iframe,
        .gmap_canvas {
            width: 80vw;
            max-width: 80vw;
        }
    }
</style>

<body>

    <!-- Bootstrap JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Navbar -->
    @include('komponen.navbar')

    <!-- Caraousel -->
    @include('komponen.caraousel')

    <!-- Deskripsi singkat -->
    <div class="description">
        <h2 class="h2">HADIR DENGAN WAJAH BARU</h2>
        <p class="p">Ballroom dengan kapasitas 1.200 tamu dirancang dengan fasilitas yang lebih baik & lebih
            lengkap. Sangat cocok untuk acara pernikahan, konferensi, maupun acara bisnis. Ballroom ini juga menyediakan
            ruang VIP, parkir luas, serta sistem pendingin udara optimal untuk kenyamanan tamu. Rencanakan acara Anda di
            Pusri Grand Ballroom!</p>
    </div>

    {{-- Bagian Fasilitas --}}
    <div class="container">
        <div class="image-card">
            <img src="asset/ruangfull.png" alt="kapasitas tamu">
            <div class="caption">Kapasitas 1200 tamu</div>
        </div>
        <div class="image-card">
            <img src="asset/parkirr.jpg" alt="parkir">
            <div class="caption">Parkir yang luas</div>
        </div>
        <div class="image-card">
            <img src="asset/ruangvip.png" alt="ruang vip">
            <div class="caption">Ruang VIP</div>
        </div>
    </div>

    {{-- Button Selengkapnya --}}
    <div class="container-btn">
        <a href="layanangedung" class="btn-selengkapnya" type="button">Selengkapnya</a>
    </div>

    <!-- Deskripsi Singkat 2 -->
    <div class="container-lokasi" style="padding: 20px;">
        <div class="description-2" style="margin-top: 4vw">
            <div class="container" style="display: flex; align-items: flex-start; gap: 2vw;">
                <!-- Bagian Kalender -->
                <div class="canvas" style="box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">
                    <iframe src="https://calendar.google.com/calendar/embed?src=melsaayp%40gmail.com&ctz=Asia%2FJakarta"
                        style="border: 0; width: 500px; height: 400px;" frameborder="0" scrolling="no"></iframe>
                </div>

                <!-- Bagian Deskripsi -->
                <div style="flex-grow: 1;">
                    <h2 class="h2" style="font-size: 2.2em; font-weight: bold;">RENCANAKAN ACARA ANDA</h2>
                    <p style="text-align: justify; line-height: 1.6; font-size: 1.1em; color: #333;">
                        Lihat jadwal gedung untuk memesan tanggal
                        terbaik—pastikan jadwal masih tersedia dan biarkan kami membantu mewujudkan momen pernikahan
                        yang tak terlupakan. Dengan fasilitas lengkap dan ruang elegan yang mampu menampung hingga 1.200
                        tamu, setiap detail
                        acara akan kami tangani dengan profesional.
                    </p>
                    <p style="font-size: 10pt">*Tanggal berwarna biru = Gedung sudah dibooking</p>
                    <a type="button" href="layanangedung" class="btn btn-dark"
                        style="margin-top: 15px; padding: 10px 20px; font-size: 1.1em; border-radius: 5px;">
                        Booking sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br>

    <!-- Bagian Lokasi dan Video  -->

    <div class="description">
        <h3 style=" color: #6E5656; ">
            "Discover the perfect venue for your events at Pusri Grand Ballroom"
        </h3>

    </div>
    <div class="container">
        <div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nnt0STig1ek?si=1LGsgDYMrSpx5U74" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="container-gmap">
            <iframe class="gmap_iframe" width="560" height="315" frameborder="0" scrolling="no"
                src="https://maps.google.com/maps?width=150&amp;height=200&amp;hl=en&amp;q=gedung serbaguna pusri&amp;t=k&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>
    </div>

    <br>


    <br>
    <!-- Footer -->
    @include('komponen.footer')

    <script>
        // Efek fade in saat scroll
        const fadeInElements = document.querySelectorAll('.description, .description-2');

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

    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

</body>

</html>
