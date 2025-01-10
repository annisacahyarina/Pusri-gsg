<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('resources/css/styles.css') }}">
    <title>Pusri Grand Ballroom</title>

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
    /* * {
        outline: 1px solid red;
        /* Ini hanya untuk melihat elemen mana yang melebar
    } */

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

    .mapouter {
        position: relative;
        text-align: right;
        width: 100vw;
        height: 40vw;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        width: 50vw;
        height: 40vw;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .gmap_iframe {
        height: 40vw !important;
    }

    .container-lokasi {
        background-color: #d4d2d2;
        padding-bottom: 2vw;
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

    <div class="container">
        <div class="image-card">
            <img src="asset/ruangfull.png" alt="kapasitas tamu">
            <div class="caption">Kapasitas 1200 tamu</div>
        </div>
        <div class="image-card">
            <img src="asset/gedungdepan.png" alt="parkir">
            <div class="caption">Parkir yang luas</div>
        </div>
        <div class="image-card">
            <img src="asset/ruangvip.png" alt="ruang vip">
            <div class="caption">Ruang VIP</div>
        </div>
    </div>

    <div class="container-btn">
        <button class="btn-selengkapnya" type="button">Selengkapnya</button>
    </div>

    <br>
    <!-- Lokasi -->
    <div class="container-lokasi">
        <div class="description">
            <h2 class="h2">LOKASI</h2>
        </div>
        <div class="container">
            <p
                style="text-align:justify; margin-right: 2vw; transform: translateY(4vw);
        transition: opacity 1s ease-out, transform 1s ease-out;">
                Pusri Grand Ballroom merupakan pilihan yang tepat bagi kamu yang ingin mengadakan acara
                pernikahan di kawasan Kalidoni, Pusri, dan sekitarnya. Dengan fasilitas yang memadai dan lokasi yang
                strategis, gedung ini menawarkan kenyamanan bagi para tamu undangan. Suasana yang mendukung dan desain
                ruangan yang fleksibel menjadikan Gedung Serbaguna Pusri sebagai venue yang ideal untuk acara
                pernikahan, baik itu dengan skala besar maupun intim.</p>
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" height="100%" frameborder="0" scrolling="no"
                        marginheight="40vw" marginwidth="40vw"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=gedung serbaguna pusri&amp;t=k&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </div>

    <br>
    <!-- Deskripsi Singkat 2 -->
    <div class="description-2" style="margin-top: 4vw">
        <div class="container" style="display: flex; align-items: flex-start;">
            <img src="asset/beranda.png" alt="beranda" style="width:40vw;">
            <div style="margin-left: 2vw;">
                <h2 class="h2">RENCANAKAN ACARA ANDA</h2>
                <p style="text-align:justify;">Ballroom yang dirancang untuk acara pernikahan, kami menyediakan layanan
                    wedding
                    organizer profesional yang bekerja sama dengan kami. Mulai dari dekorasi, tata cahaya, hingga
                    pengaturan
                    tamu, semua disesuaikan untuk
                    menciptakan momen pernikahan yang sempurna. Dengan fasilitas lengkap dan ruang elegan yang mampu
                    menampung
                    hingga 1.200 tamu, kami memastikan setiap detail pernikahan Anda berjalan lancar dan meninggalkan
                    kesan
                    mendalam bagi Anda serta para tamu.</p>
                <button type="button" class="btn btn-dark" style="margin-top: 10px">Cek wedding organizer</button>
            </div>
        </div>
    </div>

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

</body>

</html>
