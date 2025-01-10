<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatawoController extends Controller
{
    // File: app/Http/Controllers/CardController.php
public function index()
{
    // Ambil data card dan paginasi 8 per halaman
    $cards = Card::paginate(8);

    // Kirim data ke view
    return view('data.datawo', compact('cards'));
}

}
