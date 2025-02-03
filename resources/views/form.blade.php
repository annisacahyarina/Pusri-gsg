<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>

     <!-- METADATA KONTAK-->
     <meta name="author" content="Annisa Cahyarina">
     <meta name="contact" content="annisacahyarina2004@gmail.com">
     <meta name="phone" content="0878-9972-5978">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url("asset/background2.jpg")
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 500px;
        }

        .btn-primary {
            background-color: black;
            border: none;
        }

        .btn-primary:hover {
            background-color: black;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

{{-- BOOKING FORM --}}

<body>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Booking Form</h2>
            <form action="add" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        >
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address"
                        >
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telepon</label>
                    <input type="tel" class="form-control" id="phone" name="phone"
                       >
                </div>
                <div class="mb-3">
                    <label for="booking_date" class="form-label">Tanggal Booking</label>
                    <input type="date" class="form-control" id="booking_date" name="booking_date">
                </div>
                <div class="mb-3">
                    <label for="booking_type">Sewa gedung</label>
                    <select class="form-control" id="booking_type" name="booking_type">
                        <option value="" disabled selected>Pilih tipe sewa</option>
                        <option value="Eksternal" {{ request('booking_type') == 'Eksternal' ? 'selected' : '' }}>Eksternal</option>
                        <option value="Keluarga Pusri" {{ request('booking_type') == 'Keluarga Pusri' ? 'selected' : '' }}>Keluarga Pusri</option>
                        <option value="Weekdays" {{ request('booking_type') == 'Weekdays' ? 'selected' : '' }}>Weekdays</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price">Harga:</label>
                    <p style="font-size: 1vw">*harga belum termasuk ppn dan dapat berubah</p>
                    <input type="text" class="form-control" id="price" name="price"
                        value="{{ request('price') }}">
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label">Nama layanan WO</label>
                    <select class="form-control" id="catatan" name="catatan">
                        <option value="" disabled selected>Pilih Wedding Organizer</option>
                        <option value="Tidak ada">Tidak ada</option>
                        <option value="3D Wedding Organizer">3D Wedding Organizer</option>
                        <option value="Deddy Kurniawan WO">Deddy Kurniawan WO</option>
                        <option value="Dinar Wedding Organizer">Dinar Wedding Organizer</option>
                        <option value="Euoforia Wedding Organizer">Euoforia Wedding Organizer</option>
                        <option value="Fifin Wedding Organizer">Fifin Wedding Organizer</option>
                        <option value="Hello Brides Wedding Organizer">Hello Brides Wedding Organizer</option>
                        <option value="Hj. Nila Project">Hj. Nila Project</option>
                        <option value="Jasmine Wedding Organizer">Jasmine Wedding Organizer</option>
                        <option value="Keluarga Baba">Keluarga Baba</option>
                        <option value="L6 WO">L6 WO</option>
                        <option value="Makna Wedding">Makna Wedding</option>
                        <option value="MD WO">MD WO</option>
                        <option value="Momon WO">Momon WO</option>
                        <option value="Munggah Paes WO">Munggah Paes WO</option>
                        <option value="Nadsya WO">Nadsya WO</option>
                        <option value="Project Manten">Project Manten</option>
                        <option value="RR Project">RR Project</option>
                        <option value="Sarana WO">Sarana WO</option>
                        <option value="Sister Frame">Sister Frame</option>
                        <option value="Ratu Ayu Pelaminan">Ratu Ayu Pelaminan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="image" name="image" accept=".png, .jpg, .jpeg">
                </div>
                <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
