<style>
.container-footer {
        display: flex;
        justify-content: space-around;
        font-family: 'Montserrat', sans-serif;
        text-align: left;

}
.p-footer{
    color:white;
    font-size: 1rem;
}

.text-center-footer{
    font-size: 0.5rem;
    text-align: center;
}
@media (max-width: 768px) {
        body {
            margin-top: 8px; /* Tambahkan ruang lebih untuk navbar di ukuran layar kecil */
        }
        h5{
        font-size: 4vw
        }
        .p-footer{
            font-size: 3vw
        }
        .p-copyright{
            font-size: 2vw;
            color: white
        }

    }
</style>
<div style="margin-top: 30px padding:5vw">
    <footer class="bg-dark text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container-footer p-4" style="margin-bottom:20px">
            <!-- Section: Social media -->
            <section class="mb-6">
                <h5 class="text-uppercase" style="margin-right: 2vw">FOLLOW US</h5>
                <!-- Youtube -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/@pusriproperti" role="button">
                    <i class="fab fa-youtube"></i>
                </a>

                <!-- Tiktok -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.tiktok.com/@pusriproperti?_t=8sJGBAoMm9t&_r=1&fbclid=PAZXh0bgNhZW0CMTEAAaY-mbOwMc0YY3hFe2RShMJkEYYbXWa9ZvR3WAzP_yBvomYsCPkKIazb3qQ_aem_B-DsPtysfIW7x6Qzh-6A6g" role="button">
                    <i class="fab fa-tiktok"></i>
                </a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/pusrigrandballroom/" role="button">
                    <i class="fab fa-instagram"></i>
                </a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links -->
            <section>
                <div class="row">
                    <!-- Column 2 -->
                    <div class="justify-content-start">
                        <h5 class="text-uppercase">OUR CONTACT</h5>
                        <!-- Alamat -->
                        <p class="p-footer"><i class="fas fa-building" style="margin-right: 10px;"></i>
                           Jl. Komp. Pusri, Sei Selayur, Kec. Kalidoni, Kota Palembang, Sumatera Selatan 30119, Indonesia</p>

                        <!-- Nomor Telepon -->
                        <p class="p-footer"><i class="fas fa-phone" style="margin-right: 10px;"></i>
                           +62-821-7656-1646</p>
                    </div>
                </div>
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text text-center-footer p-3" style="background-color:#024188">
            <p class="p-copyright" style="text-align: center; font-size:13pt; color:white">
                © 2025 PT Pupuk Sriwidjaja Palembang (Pusri), All Rights Reserved
                </p>
        </div>
        <!-- Copyright -->
    </footer>
</div>
