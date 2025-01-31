<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
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
<body>
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Booking Form</h2>
            <form action="add" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Masukkan alamat">
                </div>
                {{-- <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email">
                </div> --}}
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telepon</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan no telepon">
                </div>
                <div class="mb-3">
                    <label for="booking_date" class="form-label">Tanggal Booking</label>
                    <input type="date" class="form-control" id="booking_date" name="booking_date">
                </div>
                <div class="form-group">
                    <label for="booking_type">Nama Layanan:</label>
                    <input type="text" class="form-control" id="booking_type" name="booking_type" value="{{ request('booking_type') }}" placeholder="Booking gedung/WO">
                </div>

                <div class="form-group">
                    <label for="price">Harga:</label>
                    <p style="font-size: 1vw">*harga belum termasuk ppn dan dapat berubah</p>
                    <input type="text" class="form-control" id="price" name="price" value="{{ request('price') }}">
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Tambahkan catatan"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Pesan Sekarang</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
