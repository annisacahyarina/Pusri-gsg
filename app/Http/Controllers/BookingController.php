<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    function add(Request $request){
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

        $result= $Booking->save();
        if ($result) {
            // Jika berhasil, kembali ke halaman home dengan pesan sukses
            return redirect('/landingpage')->with('success', 'Booking berhasil!');
        } else {
            // Jika gagal, kembali ke halaman home dengan pesan gagal
            return redirect('/landingpage')->with('error', 'Booking belum berhasil');
        }
    }

   public function list(){
    $Bookingdata = Booking::all();
       return view('dashboard.all-booking', ['bookings'=>$Bookingdata]);
    }

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

    public function dashboard2() {
        $bookings = Booking::where('status', 'Approved')->get();
        return view('dashboard.edit-booking', ['bookings' => $bookings]);
    }

    public function delete($id){
        // Cari data booking berdasarkan ID
        $booking = Booking::findOrFail($id); // Cari booking berdasarkan ID
    $booking->delete(); // Hapus booking

    return back()->with('success', 'Booking has been updated successfully!');
    }

    public function edit($id){
       $data = Booking::find($id);
       return view('dashboard.edit-form',['data'=>$data]);
    }

    public function update(Request $req){
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
        $Booking->save();
        return redirect('all-booking');

    }


}

