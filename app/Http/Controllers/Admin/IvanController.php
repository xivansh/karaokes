<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Coba\Foo;
use App\Http\Controllers\Controller;

class IvanController extends Controller
{
    public function tes()
    {
        $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo",
        "Lisa Permata"];
        return view('latihan.mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function cobafacade()
    {
        echo \Illuminate\Support\Str::snake('SedangBelajarLaravelUncover');
        echo "<br>";
        echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
    }

    public function coba_class()
    {
        $foo = new Foo;
        echo $foo->bar();
    }
}
