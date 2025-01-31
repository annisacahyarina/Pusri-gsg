<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Event Page</title>
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
    body {
        font-family: 'Montserrat', sans-serif;
        margin-top: 10vw;
    }

    .event-section {
        margin-bottom: 50px;
    }

    .event-title {
        font-weight: 700;
        font-size: 24px;
    }

    .event-description {
        font-size: 14px;
        color: #666;
    }

    .event-img {
        max-width: 100%;
        height: auto;
    }

    .event-container {
        margin-top: 50px;
    }
</style>
</head>

<body>
    <!-- Bootstrap JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- navbar --}}
    @extends('komponen.navbar')

    <div class="container event-container">
        <!-- First Row -->
        <div class="row event-section align-items-center">
            <div class="col-md-6">
                <img src="asset/testi1.jpg" alt="Wedding Image" class="event-img">
            </div>
            <div class="col-md-6">
                <h3 class="event-title">Danis & Mutiara</h3>
                <p class="event-description">"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged."</p>
            </div>
        </div>

        <!-- Second Row -->
        <div class="row event-section align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="asset/testi2.png" alt="Wedding Image" class="event-img">
            </div>
            <div class="col-md-6 order-md-1">
                <h3 class="event-title">Ifan & Sari</h3>
                <p class="event-description">"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer
                    took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                    centuries, but also the leap into electronic typesetting, remaining essentially unchanged."</p>
            </div>
        </div>

    </div>

    @extends('komponen.footer')
</body>

</html>
