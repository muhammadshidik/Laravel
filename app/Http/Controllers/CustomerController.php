<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //opsional $datas = Levels::all();
        $title = "Data customers";
        $datas = Customers::orderBy('id', 'desc')->get();
        return view('customers.index', compact('datas', 'title')); // menambahkan 'title' untuk memunculkan nama halaman di url
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah customer";
        return view('customer.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = Customers::create($request->all());
        return redirect()->to('customer');
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
        $title = "Ubah customer";
        $customer = Customers::find($id); //blank
        //cara kedua : $level = Levels::findOrFail($id); //404
        //cara ketiga $level = Levels::where('id', $id)->first();
        return view('customer.edit', compact('customer', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customers::find($id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;;
        $customer->address = $request->address;
        $customer->save();
        return redirect()->to('customer')->with('Success', 'Data Berhasil Diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customers::find($id);
        $customer->delete();
        return redirect()->to('customer')->with('Success', 'Data Berhasil DiHapus !');
    }
}
