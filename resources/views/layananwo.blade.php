<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="asset/pusri.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan WO</title>

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
            background-image: url("asset/background.jpg");
        }

        @media (max-width: 768px) {
            h2 {
                font-size: 4.5vw
            }

            p {
                font-size: 3.5vw;
            }

        }
    </style>

</head>

<body>
    <!-- Bootstrap JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    {{-- Judul halaman dan keterangan --}}

    <div class="container" style="padding:0.3vw; background-color:#ddd; ">
        <h2 style="text-align:center; margin-top: 7vw;  font-weight:bold; ">Wedding Organizer</h2>
    </div>
    <div class="container-p" style="margin-left: 2vw;  padding: 0.1vw;
        font-size: 12pt; margin-top:9px">
        <p>*Mohon menghubungi masing-masing WO terlebih dahulu untuk harga dan jadwal sebelum melakukan pemesanan.</p>
    </div>

    {{-- Navbar --}}
    @include('komponen.navbar')

    {{-- Data WO --}}
    @include('data.datawo')



    {{-- Script fade-in untuk card --}}

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cards = document.querySelectorAll(".fade-in");

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = 1;
                            entry.target.style.transform = "translateY(0)";
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1
                }
            );

            cards.forEach((card) => observer.observe(card));
        });
    </script>

    {{-- Footer --}}
    @include('komponen.footer')

</body>

</html>
