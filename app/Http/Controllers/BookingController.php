<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller

//SIMPAN DATA KE DATABASE
{
    function add(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $Booking = new Booking();
        $Booking->name= $request->name;
        $Booking->address= $request->address;
        $Booking->email= $request->email;
        $Booking->phone= $request->phone;
        $Booking->booking_date= $request->booking_date;
        $Booking->booking_type= $request->booking_type;
        $Booking->catatan= $request->catatan;
        $Booking->price= $request->price;
        $Booking->updated_by= $request->updated_by;
        $Booking->status = 'Belum approved'; // Status default
        $Booking->image = 'images/'.$imageName;


        $result= $Booking->save();
        if ($result) {
            // Jika berhasil, kembali ke halaman home dengan pesan sukses
            return redirect('/landingpage')->with('success', 'Booking berhasil!');
        } else {
            // Jika gagal, kembali ke halaman home dengan pesan gagal
            return redirect('/landingpage')->with('error', 'Booking belum berhasil');
        }
    }

    //MENAMPILKAN DATA BOOKING DARI DATABASE
   public function list(){
    $Bookingdata = Booking::all();
       return view('dashboard.all-booking', ['bookings'=>$Bookingdata]);
    }

    //TAMPILKAN DATA BOOKING BERDASARKAN STATUS
    public function dashboard() {
        // Hitung jumlah total booking
        $totalBookings = Booking::count();
        $notapprovedBookings = Booking::where('status', 'Belum approved')->count();
        $approvedBookings = Booking::where('status', 'Approved')->count();
        $bookings = Booking::where('status', 'Belum Approved')->get();

        // Kirimkan data ke view
        return view('dashboard.index', [
            'totalBookings' => $totalBookings,
            'notapprovedBookings' => $notapprovedBookings,
            'approvedBookings' => $approvedBookings,
            'bookings' => $bookings
        ]);
    }

    //TAMPILKAN DATA YANG SUDAH DI APPROVE DI VIEW EDIT-BOOKING
    public function dashboard2() {
        $bookings = Booking::where('status', 'Approved')->get();
        return view('dashboard.edit-booking', ['bookings' => $bookings]);
    }

    //FUNGSI DELETE
    public function delete($id){
        // Cari data booking berdasarkan ID
        $booking = Booking::findOrFail($id); // Cari booking berdasarkan ID
    $booking->delete();

    return back()->with('success', 'Booking has been updated successfully!');
    }

    //FUNGSI EDIT
    public function edit($id){
       $data = Booking::find($id);
       return view('dashboard.edit-form',['data'=>$data]);
    }

    //SIMPAN DATA
    public function update(Request $req){
        $req->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

      $Booking=Booking::find($req->id);
      $Booking->name= $req->name;
        $Booking->address= $req->address;
        $Booking->email= $req->email;
        $Booking->phone= $req->phone;
        $Booking->booking_date= $req->booking_date;
        $Booking->booking_type= $req->booking_type;
        $Booking->catatan= $req->catatan;
        $Booking->price= $req->price;
        $Booking->updated_by= $req->updated_by;
        $Booking->status = $req->status;

         // Jika ada gambar baru yang diupload
    if ($req->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($Booking->image && file_exists(public_path($Booking->image))) {
            unlink(public_path($Booking->image)); // Menghapus gambar lama
        }

        // Upload gambar baru
        $imageName = time() . '.' . $req->image->extension();
        $req->image->move(public_path('images'), $imageName);
        $Booking->image = 'images/' . $imageName;
    }

        $Booking->save();
        return redirect('all-booking');

    }

    //SIMPAN FORMAT CSV
    public function generateCsv(){
        $data = Booking::latest()->get();
        $filename="Data Booking Pusri Grand Ballroom.csv";
        $fp=fopen($filename, "w+");
        fputcsv($fp, array('Nama', 'Alamat', 'No.Telpon', 'Email', 'Tanggal Booking',
        'Harga', 'Jenis Layanan', 'Catatan', 'Waktu Pemesanan', 'Status', 'Bukti Pembayaran'));

        foreach($data as $row){
            $imageUrl = asset($row->image);
            fputcsv($fp, array($row->name, $row->address, $row->phone,
            $row->email, $row->booking_date, $row->price, $row->booking_type,
            $row->catatan, $row->created_at, $row->status,  $imageUrl));
        }

        fclose($fp);
        $headers = array('Content-Type'=> 'text/csv');

        return response()->download($filename, 'Data Booking Pusri Grand Ballroom.csv', $headers);
    }

    function search(Request $request){
        $Booking= Booking::where('name','like',"%$request->search%")->get();
        return view('dashboard.all-booking', ['bookings'=>$Booking]);

    }

}

