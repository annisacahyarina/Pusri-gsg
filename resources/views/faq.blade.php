<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Section</title>

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
        * {
            font-family: 'Montserrat', sans-serif;
        }

        body {
            margin-top: 10vw;
            padding: 0;
            background-image: url('asset/faq.png');
            /* Path ke file gambar */
            background-size: cover;
            /* Agar gambar menutupi seluruh area */
            background-position: center;
            /* Posisikan gambar di tengah */
            background-attachment: fixed;
            /* Membuat efek parallax */
            position: relative;

        }

        .faq-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .faq-header {
            margin-bottom: 30px;
        }

        .faq-header h1 {
            font-size: 24px;
            margin: 0;
            font-weight: bold;
        }

        .faq-header p {
            color: #777;
        }

        .faq-item {
            border-bottom: 1px solid #ddd;
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .faq-question:hover {
            background-color: #f1f1f1;
        }

        .faq-answer {
            display: none;
            padding: 15px;
            color: #555;
            font-size: 14px;
            line-height: 1.6;
        }

        .faq-icon {
            transition: transform 0.3s;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }
        @media (max-width: 768px) {
        body {
            margin-top: 8px; /* Tambahkan ruang lebih untuk navbar di ukuran layar kecil */
        }
        .faq-header h1 {
            font-size: 5vw;
            margin: 0;
            font-weight: bold;
        }

        .faq-header p {
            color: #777;
            font-size: 3.2vw;
        }
        .faq-section{
            margin: 5vw;
        }
        span{
            font-size: 3.2vw
        }
        .faq-answer{
            font-size: 3vw
        }
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

    {{-- section pertanyaan --}}

    <div class="faq-section">
        <div class="faq-header">

            <h1 style="text-align: start">QUESTION ANSWER</h1>
            <p style="text-align:start">Temukan jawaban atas pertanyaan yang sering diajukan mengenai layanan kami.</p>
        </div>
        <!-- FAQ Items -->
        <div class="faq-item">
            <div class="faq-question">
                <span>Bagaimana alur pemesanan di web ini?</span>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-answer">
                Pengguna dapat memesan gedung maupun WO yang diinginkan. Lalu, pengguna diharapkan untuk mengisi form
                terkait data diri dan pemesanan agar dapat diproses oleh admin. Jika telah di approve oleh admin, maka
                pengguna akan menerima pesan dari admin untuk detail penyewaan dan acara.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span>Bagaimana sistem pembayarannya?</span>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-answer">Pembayaran penyewaan gedung maupun WO sesuai dengan kesepakatan dengan pihak terkait (diluar website ini).
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span>CAN I REQUEST PEOPLE WORKING?</span>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-answer">Yes, you can request specific staff for your project by contacting us directly.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span>HOW LONG DAY NEEDED?</span>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-answer">The project usually takes around 3-5 days, depending on the complexity of the task.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span>HOW TO CLAIM INSURANCE?</span>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-answer">You can claim insurance by providing the required documents to our customer service.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span>CAN I REQUEST PEOPLE WORKING?</span>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-answer">Yes, you can request specific staff for your project by contacting us directly.
            </div>
        </div>
        <div class="faq-item">
            <div class="faq-question">
                <span>HOW TO TRACK MY ORDER?</span>
                <span class="faq-icon">▼</span>
            </div>
            <div class="faq-answer">You can track your order status using the tracking number provided after your
                purchase.</div>
        </div>
    </div>

    <script>
        // FAQ Toggle Functionality
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                // Toggle active class
                item.classList.toggle('active');
            });
        });
    </script>

    @extends('komponen.footer')
</body>

</html>
