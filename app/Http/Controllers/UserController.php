<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //opsional $datas = Levels::all();
        $title = "Data User";
        $datas = User::orderBy('id', 'desc')->get();
        return view('user.index', compact('datas', 'title')); // menambahkan 'title' untuk memunculkan nama halaman di url
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah User";
        return view('user.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->to('user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Ubah User";
        $user = User::find($id); //blank\
        //cara kedua : $user = User::findOrFail($id); //404
        //cara ketiga $user = User::where('id', $id)->first();
        return view('user.edit', compact('user', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        //buat cek password
        if ($request->password) {
            $user->password = $request->password;
        }
        $user->save();
        return redirect()->to('user')->with('Success', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('user')->with('Success', 'Data Berhasil DiHapus !');
    }
}
