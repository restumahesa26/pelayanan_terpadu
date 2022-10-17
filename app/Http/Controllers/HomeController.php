<?php

namespace App\Http\Controllers;

use App\Models\BukuTamu;
use App\Models\EPosbakum;
use App\Models\Hukum;
use App\Models\InformasiPengaduan;
use App\Models\KaumRenta;
use App\Models\Perdata;
use App\Models\Pidana;
use App\Models\Umum;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.user.home');
    }

    public function home2()
    {
        $link = BukuTamu::first();

        return view('pages.user.home-2', compact('link'));
    }

    public function layanan()
    {
        return view('pages.user.jenis-layanan');
    }

    public function umum()
    {
        $link = Umum::first();

        return view('pages.user.umum', compact('link'));
    }

    public function pidana()
    {
        $link1 = Pidana::where('jenis', 'Cek Denda Tilang')->first();
        $link2 = Pidana::where('jenis', 'Izin Penggeledahan & Penyitaan')->first();
        $link3 = Pidana::where('jenis', 'Pelimpahan Berkas')->first();
        $link4 = Pidana::where('jenis', 'Perpanjangan Penahanan')->first();
        $link5 = Pidana::where('jenis', 'Izin Besuk Tahanan & Pinjam Pakai Barang Bukti')->first();

        return view('pages.user.pidana', compact('link1', 'link2', 'link3', 'link4', 'link5'));
    }

    public function cek_tilang()
    {
        $link = Pidana::where('jenis', 'Cek Denda Tilang')->first();

        return view('pages.user.cek-tilang', compact('link'));
    }

    public function perdata()
    {
        $link1 = Perdata::where('jenis', 'Pendaftaran Gugatan, Bantahan, Gugatan Sederhana, Permohonan Secara Online')->first();
        $link2 = Perdata::where('jenis', 'Pendaftaran Upaya Hukum Banding Secara Online')->first();

        return view('pages.user.perdata', compact('link1', 'link2'));
    }

    public function hukum()
    {
        $link1 = Hukum::where('jenis', 'Permohonan Izin Magang dan Penelitian')->first();
        $link2 = Hukum::where('jenis', 'Surat Tidak Pernah Dipidana Sebagai Terpidana')->first();
        $link3 = Hukum::where('jenis', 'Surat Tidak Sedang Dicabut Hak Pilih')->first();
        $link4 = Hukum::where('jenis', 'Surat Sedang Tidak Dinyatakan Pailit')->first();
        $link5 = Hukum::where('jenis', 'Surat Tidak Memiliki Tanggungan Hutang')->first();

        return view('pages.user.hukum', compact('link1', 'link2', 'link3', 'link4', 'link5'));
    }

    public function informasi_pengaduan()
    {
        return view('pages.user.informasi-pengaduan');
    }

    public function informasi()
    {
        $link1 = InformasiPengaduan::where('jenis', 'Informasi Administrasi Layanan')->first();
        $link2 = InformasiPengaduan::where('jenis', 'Informasi Humas')->first();

        return view('pages.user.informasi', compact('link1', 'link2'));
    }

    public function pengaduan()
    {
        $link1 = InformasiPengaduan::where('jenis', 'Pengaduan Melalui Sikomo Dua')->first();
        $link2 = InformasiPengaduan::where('jenis', 'Pengaduan Melalui Siwas')->first();
        $link3 = InformasiPengaduan::where('jenis', 'Pengaduan Gratifikasi')->first();
        $link4 = InformasiPengaduan::where('jenis', 'Pengaduan Terkait Layanan')->first();

        return view('pages.user.pengaduan', compact('link1', 'link2', 'link3', 'link4'));
    }

    public function e_posbakum()
    {
        return view('pages.user.e-posbakum');
    }

    public function e_posbakum_2()
    {
        return view('pages.user.e-posbakum-2');
    }

    public function e_posbakum_offline()
    {
        return view('pages.user.e-posbakum-offline');
    }

    public function e_posbakum_online()
    {
        $link1 = EPosbakum::where('jenis', 'Telepon')->first();
        $link2 = EPosbakum::where('jenis', 'Sms')->first();
        $link3 = EPosbakum::where('jenis', 'Whatsapp')->first();
        $link4 = EPosbakum::where('jenis', 'Facebook')->first();
        $link5 = EPosbakum::where('jenis', 'Instagram')->first();
        $link6 = EPosbakum::where('jenis', 'Email')->first();

        return view('pages.user.e-posbakum-online', compact('link1', 'link2', 'link3', 'link4', 'link5', 'link6'));
    }

    public function e_posbakum_disabilitas()
    {
        $link = EPosbakum::where('jenis', 'Disabilitas / Kaum Renta')->first();

        return view('pages.user.e-posbakum-disabilitas', compact('link'));
    }

    public function disabilitas()
    {
        return view('pages.user.disabilitas');
    }

    public function fasilitas_disabilitas()
    {
        return view('pages.user.fasilitas-disabilitas');
    }

    public function perdata_voluntair()
    {
        $link = KaumRenta::first();

        return view('pages.user.voluntair', compact('link'));
    }
}
