<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: rgb(231, 231, 231);
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
        .small-image {
            width: 100px;
            /* atur lebar sesuai kebutuhan */
            height: auto;
            /* mempertahankan aspek rasio */
        }
    </style>
</head>

<body>
    {{-- FORM EDIT --}}
    <div class="container">
        <div class="form-container">
            <h2 class="text-center mb-4">Edit Form</h2>
            <form action="/edit" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{$data['id']}}">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$data['name']}}">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$data['address']}}">
                </div>
                {{-- <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$data['email']}}">
                </div> --}}
                <div class="mb-3">
                    <label for="phone" class="form-label">No Telepon</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="{{$data['phone']}}">
                </div>
                <div class="mb-3">
                    <label for="booking_date" class="form-label">Tanggal Booking</label>
                    <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{$data['booking_date']}}">
                </div>
                <div class="form-group">
                    <label for="booking_type">sewa gedung:</label>
                    <input type="text" class="form-control" id="booking_type" name="booking_type" value="{{$data['booking_type']}}">
                </div>

                <div class="form-group">
                    <label for="price">Harga:</label>
                    <p style="font-size: 1vw">*harga belum termasuk ppn dan dapat berubah</p>
                    <input type="text" class="form-control" id="price" name="price" value="{{$data['price']}}">
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label">Nama Layanan WO:</label>
                    <input class="form-control" id="catatan" name="catatan" rows="3" value="{{$data['catatan']}}">
                </div>
                <div class="col-auto">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="Belum Approve" {{ $data['status'] == 'Belum Approved' ? 'selected' : '' }}>Belum Approved</option>
                        <option value="Approved" {{ $data['status'] == 'Approved' ? 'selected' : '' }}>Approved</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Bukti Pembayaran</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">

                    <!-- Menampilkan Gambar Lama -->
                    @if($data->image)
                        <img src="{{ asset($data->image) }}" alt="Bukti Pembayaran" class="small-image mt-2">
                    @endif
                </div>
                <br>
                <button type="submit" class="btn btn-primary w-100">Update data</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
