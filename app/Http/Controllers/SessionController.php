<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }

    public function buatSession(Request $request)
    {
        session(['hakAkses' => 'Admin', 'nama' => 'Ivan']);
        return "Session sudah dibuat";
    }

    public function aksesSession(Request $request)
    {
        dump( session()->all());

            if (session()->has('hakAkses'))
            {
                echo "Session 'hakAkses' terdeteksi: ". session('hakAkses');
            }
            // Menggunakan helper function
        echo session('hakAkses');
        echo session('nama');
        echo '<hr>';
            // Dari Request object
        echo $request->session()->get('hakAkses');
        echo $request->session()->get('nama');
        echo '<hr>';
            // Menggunakan facade Session
        echo Session::get('hakAkses');
        echo Session::get('nama');
    }

    public function hapusSession(Request $request)
    {
        session()->forget('hakAkses');
        return 'Sukses dihapus!';
    }

    public function flashSession()
    {
        session()->flash('hakAkses','admin');
        echo "Flash session hakAkses sudah dibuat";
    }
}
