{{-- Style untuk tampilan data WO --}}
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
    .container-card {
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

    .h3-data {
        margin-bottom: 1vw;
        font-size: 1.4vw;
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
        text-align: center;
    }

    .p-data {
        font-size: 1.2vw;
        margin-bottom: 2vw;
        text-align: center;
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
    .container-data{
        margin-top: auto;
    }

    /* Responsivitas untuk layar kecil */
    @media (max-width: 768px) {
        .container-card {
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

        .h3-data {
            font-size: 4vw;
            margin-top: 2vw;
        }

        .p-data,
        .container-card {
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

{{-- Card data WO --}}
<div class="container-fluid">
    <div class="row">
        <div class="container-card">
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo1.png" alt="wo1" loading="lazy">
                <div class="container-data">
                    <h3 class="h3-data">3D Wedding Organizer</h3>
                    <p class="p-data">Rp 164.500.000,-</p>
                </div>
            </div>

            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo2.png" alt="wo2" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Deddy Kurniawan WO</h3>
                <p class="p-data">Rp 173.500.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo3.png" alt="wo3" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Dinar Wedding Organizer</h3>
                <p class="p-data">Rp 134.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo4.png" alt="wo4" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Dinar Wedding Organizer</h3>
                <p class="p-data">Rp 145.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo5.png" alt="wo5" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Euforia Wedding Organizer</h3>
                <p class="p-data">Rp 160.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo6.png" alt="wo6" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Fifin Wedding Organizer</h3>
                <p class="p-data">Rp 150.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo7.png" alt="wo7" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Hello Brides Wedding Organizer</h3>
                <p class="p-data">Rp 145.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo8.png" alt="wo8" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Hello Brides Wedding Organizer</h3>
                <p class="p-data">Rp 170.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo9.png" alt="wo9" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Hj. Nila Project</h3>
                <p class="p-data">Rp 164.500.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo10.png" alt="wo10" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Jasmine Wedding Organizer</h3>
                <p class="p-data">Rp 140.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo11.png" alt="wo11" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Keluarga Baba</h3>
                <p class="p-data">Rp 155.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo12.png" alt="wo12" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">L6 WO</h3>
                <p class="p-data">Rp 190.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo13.png" alt="wo13" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Makna Wedding</h3>
                <p class="p-data">Rp 188.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo14.png" alt="wo14" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Makna Wedding</h3>
                <p class="p-data">Rp 182.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo15.png" alt="wo15" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">MD WO</h3>
                <p class="p-data">Rp 161.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo16.png" alt="wo16" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Momon WO</h3>
                <p class="p-data">Rp 149.999.999,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo17.png" alt="wo17" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Munggah Paes WO</h3>
                <p class="p-data">Rp 160.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo18.png" alt="wo18" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Nadsya WO</h3>
                <p class="p-data">Rp 165.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo19.png" alt="wo19" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Project Manten</h3>
                <p class="p-data">Rp 168.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo20.png" alt="wo20" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">RR Project</h3>
                <p class="p-data">Rp 126.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo21.png" alt="wo21" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Sarana WO</h3>
                <p class="p-data">Rp 145.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo22.png" alt="wo22" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Sarana WO</h3>
                <p class="p-data">Rp 170.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo23.png" alt="wo23" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Sister Frame</h3>
                <p class="p-data">Rp 145.000.000,-</p>
                </div>
            </div>
            <div class="card fade-in col-3">
                <img class="img-card" src="asset/wo24.png" alt="wo24" loading="lazy">
                <div class="container-data">
                <h3 class="h3-data">Ratu Ayu Pelaminan</h3>
                <p class="p-data">Rp 125.000.000,-</p>
                </div>
            </div>
        </div>
    </div>



