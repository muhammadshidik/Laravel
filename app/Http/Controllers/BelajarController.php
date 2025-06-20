<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{

    //tambah-tambahan
    public function index()
    {
        return view('aritmatika');
    }

    public function tambah()
    {
        $title = "Tambah - tambahan";
        $jumlah = 0;
        return view('tambah',  compact('title', 'jumlah'));
        //retun view('tambah, [$title, $jumlah]);
    }
    public function tambahAction(Request $request)
    {
        //POST
        $angka1 = $request->angka1; //cara ke 1
        $angka2 = $request->input('angka2'); //cara ke 2
        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
    }










    public function update($name)
    {
        return "selamat datang $name";
    }


    public function nuall()
    {
        return "selamat datang nuall";
    }
}
