<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use App\Models\Umum;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $buku_tamu = BukuTamu::first();
        $umum = Umum::first();

        return view('pages.dashboard', compact('buku_tamu', 'umum'));
    }
}
