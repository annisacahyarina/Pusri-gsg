<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tanggal Booking</th>
            <th>Jenis Booking</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->address }}</td>
                <td>{{ $booking->phone }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>{{ $booking->booking_type }}</td>
                <td>{{ $booking->status }}</td>
                <td>
                    @if($booking->status == 'Belum Approve')
                        <form action="{{ route('booking.approve', $booking->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit">Approve</button>
                        </form>
                    @else
                        Sudah Approve
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
