<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\TransDetails;
use App\Models\TransOrders;
use App\Models\TypeOfServices;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Midtrans\Config;
use Midtrans\Snap;

class TransOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        Config::$serverKey = env('MITRANS_SERVER_KEY');
        Config::$isProduction = env('MITRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }


    public function index()
    {
        $title = "Transaksi Order";
        $datas = TransOrders::with('customer')->orderBy('id', 'desc')->get();
        return view('trans.index', compact('title', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //TR-0101010101-001
        //$today = date('dmY');
        $today = Carbon::now()->format('dmY');
        $countDay = TransOrders::whereDay('created_at', now()->toDateString())->count() + 1;
        $runningNumber = str_pad($countDay, 3, '0', STR_PAD_LEFT); //000
        $title = "Tambah Transaksi";
        $ordercode = "TR-" . $today . "-" . $runningNumber;

        $customers = Customers::orderBy('id', 'desc')->get();
        $services = TypeOfServices::orderBy('id', 'desc')->get();
        return view('trans.create', compact('customers', 'title', 'ordercode', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_end_date' => 'required'
        ]);

        $transOrder = TransOrders::create([
            'id_customer' => $request->id_customer,
            'order_code' => $request->order_code,
            'order_end_date' => $request->order_end_date,
            'total' => $request->grand_total
        ]);

        foreach ($request->id_service as $key => $idProduct) {
            $id_trans = $transOrder->id;
            TransDetails::create([
                'id_trans' => $id_trans,
                'id_service' => $idProduct,
                'qty' => $request->qty[$key],
                'subtotal' => $request->total[$key]
            ]);
        }

        return redirect()->route('trans.index')->with('status', 'Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $title = "Detail Transaksi";
        $details = TransOrders::with(['customer', 'details.service'])->where('id', $id)->first();
        // return $details;

        $params = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => 10.000,
            ],
            'customer_details' => [
                'first_name' => "Bambang",
                'last_name' => "Pamungkas",
                'email' => "bambang@gmail.com",
                'phone' => "08994212290",
            ],
            'enable_payment' => [
                'qris'
            ],

        ];

        // $snapToken = Snap::getSnapToken($params);
        $snapToken = Snap::createTransaction($params);
        return view('trans.show', compact('title', 'details', 'snapToken'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function printStruk(string $id)
    {
        $details = TransOrders::with(['customer', 'details.service'])->where('id', $id)->first();

        // buat debugging
        //1. return $details;
        //2. dd($details)

        return view('trans.print', compact('details'));
    }
}
