@extends('app');
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Data Pelanggan</h3>
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $details->customer->name }}</td>
                        </tr>
                        <tr>
                            <td>Telp/Hp</td>
                            <td>:</td>
                            <td>{{ $details->customer->phone }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ $details->customer->address }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Transaksi Order</h3>
                    <table class="table table-bordered">
                        <tr>
                            <td>No.Transaksi</td>
                            <td>:</td>
                            <td>{{ $details->order_code }}</td>
                        </tr>
                        <tr>
                            <td>Estimasi Pengambilan</td>
                            <td>:</td>
                            <td>{{ date('d F Y', strtotime($details->order_end_date)) }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>{{ $details->status_text }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Transaksi Order Detail</h3>
                    <form action="" method="POST">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Paket</th>
                                    <th>Qty</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($details->details as $index => $detail)
                                    <tr>
                                        <td>{{ $index += 1 }}</td>
                                        <td align="right">{{ $detail->service->service_name }}</td>
                                        <td align="right">{{ $detail->qty }}</td>
                                        <td align="right">{{ number_format($detail->service->price) }}</td>
                                        <td align="right">{{ $detail->subtotal }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3">Grand Total :</th>
                                    <td colspan="2" class="text-right" align="right">Rp.
                                        {{ number_format($detail->subtotal) }}
                                        <input type="hidden" class="totalInput" id="totalInput"
                                            value="{{ $details->total }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">Bayar :</th>
                                    <td colspan="2" class="text-right" align="right">
                                        <input type="number" class="form-control" id="order_pay" nama="order_pay" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th colspan="3">Kembali :</th>
                                    <td colspan="2" class="text-right" align="right">
                                        <input type="text" class="form-control" id="order_change_display"
                                            nama="order_change_display" readonly>
                                        <input type="hidden" class="form-control" id="order_change" nama="order_change"
                                            required>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                    <div class="mt-3">
                        <button class="btn btn-primary" name="cash">Bayar Cash</button>
                        <button class="btn btn-primary" name="cashles">Cashless</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
