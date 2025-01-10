<style>
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f9f9f9;
    }

    @media (max-width: 768px) {
        body {
            padding-top: 60px;
            /* Tambahkan ruang lebih untuk navbar di ukuran layar kecil */
        }
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        gap: 5vw;
        justify-content: center;
        margin-top: 1vw;
        margin-bottom: 3vw;
    }

    .card {
        width: 25vw;
        /* Lebar card menyesuaikan dengan viewport */
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 2vw;
        text-align: center;
        opacity: 0;
        /* Awal animasi: tidak terlihat */
        transform: translateY(30px);
        /* Awal animasi: bergeser ke bawah */
        animation: fadeIn 1s ease forwards;
        /* Animasi fade-in */
    }

    .card:nth-child(1) {
        animation-delay: 0.2s;
    }

    .card:nth-child(2) {
        animation-delay: 0.4s;
    }

    .card:nth-child(3) {
        animation-delay: 0.6s;
    }

    .card:nth-child(4) {
        animation-delay: 0.8s;
    }

    .card:nth-child(5) {
        animation-delay: 1s;
    }

    .card:nth-child(6) {
        animation-delay: 1.2s;
    }
    h3 {
        margin-top: 1vw;
        margin-bottom: 1vw;
        font-size: 1.4vw;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        text-align: start;
    }

    p {
        font-size: 1.2vw;
        margin-bottom: 2vw;
        text-align: start;
    }
    .card button {
        width: 100%;
        padding: 1vw;
        margin-top: auto;
        border: none;
        border-radius: 5px;
        font-size: 1.2vw;
        cursor: pointer;
    }
  /* Animasi Fade-in */
  @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .img-card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-bottom: 1vw;
    }

    /* Responsivitas untuk layar kecil */
    @media (max-width: 768px) {
        .container {
            padding: 5vw 3vw;
            gap: 2vw;
            font-size: 3vw
        }

        .card {
            width: 90vw;
            /* Lebar card menyesuaikan layar kecil */
        }

        .image-placeholder {
            height: 30vw;
        }

        h3 {
            font-size: 4vw;
            margin-top: 2vw;
        }

        p,
        .container button {
            font-size: 3vw;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            flex: 0 1 calc(50% - 10px);
            /* Mengatur agar card mengambil 50% lebar, dikurangi sedikit margin */
            margin-bottom: 20px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="container">

            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo1.png" alt="wo1" loading="lazy">
                <h3>3D Wedding Organizer</h3>
                <p>Rp 164.500.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6281273110246?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>

            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo2.png" alt="wo2" loading="lazy">
                <h3>Deddy Kurniawan WO</h3>
                <p>Rp 173.500.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6287894901733?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo3.png" alt="wo3" loading="lazy">
                <h3>Dinar Wedding Organizer</h3>
                <p>Rp 134.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6281368025252?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo4.png" alt="wo4" loading="lazy">
                <h3>Dinar Wedding Organizer</h3>
                <p>Rp 145.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6281368025252?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo5.png" alt="wo5" loading="lazy">
                <h3>Euforia Wedding Organizer</h3>
                <p>Rp 160.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/628117199610?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo6.png" alt="wo6" loading="lazy">
                <h3>Fifin Wedding Organizer</h3>
                <p>Rp 150.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6288281987238?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo7.png" alt="wo7" loading="lazy">
                <h3>Hello Brides Wedding Organizer</h3>
                <p>Rp 145.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- belum ada nomor --}}
                <a href="https://wa.me/6281368025252?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo8.png" alt="wo8" loading="lazy">
                <h3>Hello Brides Wedding Organizer</h3>
                <p>Rp 170.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- belum ada nomor --}}
                <a href="https://wa.me/6281368025252?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo9.png" alt="wo9" loading="lazy">
                <h3>Hj. Nila Project</h3>
                <p>Rp 164.500.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6281379256314?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo10.png" alt="wo10" loading="lazy">
                <h3>Jasmine Wedding Organizer</h3>
                <p>Rp 140.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- belum ada nomro --}}
                <a href="https://wa.me/6281379256314?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo11.png" alt="wo11" loading="lazy">
                <h3>Keluarga Baba</h3>
                <p>Rp 155.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- belum ada nomor --}}
                <a href="https://wa.me/6281379256314?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo12.png" alt="wo12" loading="lazy">
                <h3>L6 WO</h3>
                <p>Rp 190.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/628281278910944?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo13.png" alt="wo13" loading="lazy">
                <h3>Makna Wedding</h3>
                <p>Rp 188.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/628225284887?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo14.png" alt="wo14" loading="lazy">
                <h3>Makna Wedding</h3>
                <p>Rp 182.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/628225284887?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo15.png" alt="wo15" loading="lazy">
                <h3>MD WO</h3>
                <p>Rp 161.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- belum ada nomor --}}
                <a href="https://wa.me/628225284887?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo16.png" alt="wo16" loading="lazy">
                <h3>Momon WO</h3>
                <p>Rp 149.999.999,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6282177816212?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo17.png" alt="wo17" loading="lazy">
                <h3>Munggah Paes WO</h3>
                <p>Rp 160.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- belum ada nomor --}}
                <a href="https://wa.me/6282177816212?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo18.png" alt="wo18" loading="lazy">
                <h3>Nadsya WO</h3>
                <p>Rp 165.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/6282178782600?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo19.png" alt="wo19" loading="lazy">
                <h3>Project Manten</h3>
                <p>Rp 168.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- belum ada nomor --}}
                <a href="https://wa.me/6282178782600?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo20.png" alt="wo20" loading="lazy">
                <h3>RR Project</h3>
                <p>Rp 126.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/62895346550025?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo21.png" alt="wo21" loading="lazy">
                <h3>Sarana WO</h3>
                <p>Rp 145.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- BELUM ADA NOMOR --}}
                <a href="https://wa.me/62895346550025?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo22.png" alt="wo22" loading="lazy">
                <h3>Sarana WO</h3>
                <p>Rp 170.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                {{-- BELUM ADA NOMOR --}}
                <a href="https://wa.me/62895346550025?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo23.png" alt="wo23" loading="lazy">
                <h3>Sister Frame</h3>
                <p>Rp 145.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/628997643336?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo24.png" alt="wo24" loading="lazy">
                <h3>Ratu Ayu Pelaminan</h3>
                <p>Rp 125.000.000,-</p>
                <button type="button" class="btn btn-dark">Pesan Sekarang</button>
                <a href="https://wa.me/628117101005?text=Halo%20saya%20tertarik%20dengan%20layanan%20anda"
                    target="_blank">
                    <button type="button" class="btn btn-success" style="margin-top: 0.3vw">Chat WhatsApp</button>
                </a>
            </div>
        </div>
    </div>


@extends('komponen.footer')
