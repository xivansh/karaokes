<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $myArray = [1, 9, 3, 4, 5, 3, 5, 7];
        $collection = new \Illuminate\Support\Collection($myArray);
        dd($collection);
    }
    public function collectionDua()
    {
        $collectionsi = collect(["belajar", "laravel", "uncover", 1, 2, 3]);
        $collections = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5",
            "kota" => "Lampung",
            "jurusan" => "IPA",
            ]);
        $stringku =  $collections;
        $strangku = $collectionsi;
        echo $strangku;

    }
    public function collectionTiga()
    {
        // $collection = collect([2, 99, 30, 49, 5, 3, 5, 7]);
        // // Operasi Matematis
        // dump( $collection->sum() );
        // dump( $collection->avg() );
        // dump( $collection->max() );
        // dump( $collection->min() );
        // dump( $collection->median() );

        // $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        // dump( $collection->contains(4) );
        // dump( $collection->contains(6) );

        $varA = [1,2,3];
        $varB = collect([1,2,3]);
        dump($varA);
        dump($varB);
    }
    public function collectionEmpat()
    {
        // $collection = collect([
        //     "nama" => "Laura",
        //     "sekolah" => "SMA 5 Lampung",
        //     "kota" => "Lampung",
        //     "jurusan" => "IPA",
        //     ]);
        //     dump( $collection->has('jurusan') ); // true
        //     dump( $collection->has('umur') ); // false
        // $collection = collect([
        //     "nama" => "Laura",
        //     "sekolah" => "SMA 5 Lampung",
        //     "kota" => "Lampung",
        //     "jurusan" => "IPA",
        //     ]);
        //     dump( $collection->get('sekolah') );

        $collection = collect([
            "nama" => "Laura",
            "sekolah" => "SMA 5 Lampung",
            "kota" => "Lampung",
            "jurusan" => "IPA",
            ]);
            // Ganti isi collection
            $hasil = $collection->search('IPA');
            dump( $hasil );
    }
    public function collectionLima()
    {
        // $collection = collect([
        //     ['namaProduk' => 'Laptop A', 'harga' => 59990000],
        //     ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
        //     ['namaProduk' => 'Speaker C', 'harga' => 350000],
        //     ]);
        //     dump( $collection );

        // $collection = collect([
        //     ['namaProduk' => 'Laptop A', 'harga' => 59990000],
        //     ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
        //     ['namaProduk' => 'Speaker C', 'harga' => 350000],
        //     ]);
        //     // Urutkan berdasarkan key harga
        //     dump( $collection->sortBy('harga') );
        //     // Urutkan berdasarkan key harga
        //     dump( $collection->sortByDesc('harga') );

        // $collection = collect([
        //     ['namaProduk' => 'Laptop A', 'harga' => 59990000],
        //     ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
        //     ['namaProduk' => 'Speaker C', 'harga' => 350000],
        //     ]);
        //     $hasil = $collection->filter(function ($val, $key) {
        //     return $val['harga'] < 60000000;
        //     });
        //     dump( $hasil );


        $collection = collect([
            ['namaProduk' => 'Laptop A', 'harga' => 59990000],
            ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
            ['namaProduk' => 'Speaker C', 'harga' => 350000],
            ]);

            $hasil = $collection->firstWhere('namaProduk');

            echo $hasil['harga']."<br>";

    }
    public function collectionEnam()
    {
        $collection = collect([
            ['namaProduk' => 'Laptop A', 'harga' => 59990000],
            ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
            ['namaProduk' => 'Speaker C', 'harga' => 350000],
            ]);
            $hasil = $collection->where('harga','>=', 1000000)->all();
            echo "<hr>";
            foreach($hasil as $val) {
            echo $val['namaProduk']."<br>";
            }
    }
}
