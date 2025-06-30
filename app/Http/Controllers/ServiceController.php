<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeOfServices;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //opsional $datas = Levels::all();
        $title = "Data Services";
        $datas = TypeOfServices::orderBy('id', 'desc')->get();
        return view('service.index', compact('datas', 'title')); // menambahkan 'title' untuk memunculkan nama halaman di url
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Service";
        return view('service.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TypeOfServices::create($request->all());
        return redirect()->to('service');
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
        $title = "Ubah Service";
        $service = TypeOfServices::find($id); //blank
        //cara kedua : $level = Levels::findOrFail($id); //404
        //cara ketiga $level = Levels::where('id', $id)->first();
        return view('service.edit', compact('service', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = TypeOfServices::find($id);
        $service->service_name = $request->service_name;
        $service->price = $request->price;
        $service->description = $request->description;
        $service->save();
        return redirect()->to('service')->with('Success', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = TypeOfServices::find($id);
        $service->delete();
        return redirect()->to('service')->with('Success', 'Data Berhasil DiHapus !');
    }
}
