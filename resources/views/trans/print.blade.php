<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Laundry</title>
    <style>
        body {
            font-family: monospace;
            width: 80mm;
            margin: auto;
            padding: 10px;
        }

        .struk {
            text-align: center;
        }

        .line {
            margin: 5px 0;
            border-top: 1 dashed black;
        }

        .info,
        .product,
        .summary {
            text-align: left;
        }

        .product .item {
            margin-bottom: 5px;
        }

        .product .item-qty {
            display: flex;
            justify-content: space-between;
        }

        .info .row,
        .summary .row {
            display: flex;
            justify-content: center;
            font-size: 13px;
            margin-top: 10px;
        }

        footer {
            text-align: center;
            font-size: 13px;
            margin-top: 10px;
        }

        @media print {
            body {
                margin: 80mm;
                margin: 0;
            }
        }
    </style>
</head>

<body>
    <div class="struk">
        <div class="struk-header">
            <h3>Laundry mamah</h3>
            <h2>Murah Meriah</h2>

            <div class="info text-center">
                jl. TB. Simatupang, Jakarta Timur.
                <br>
                089684758768
            </div>
        </div>
        <div class="line"></div>
        <div class="info">
            <div class="row">
                <span>{{ $details->created_at->format('d M Y') }}</span>
                <span>{{ $details->created_at->format('H:i') }}</span>
                <div class="row">
                    <span>Cashier</span>
                    <span>{{ auth()->user()->name }}</span>
                </div>
                <div class="row">
                    <span>Order Id</span>
                    <span>{{ $details->order_code ?? '' }}</span>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="products">
            @foreach ($details->details as $detail)
                <div class="item">
                    <strong>{{ $detail->service->service_name }}</strong>
                    <div class="item-qty">
                        <span>{{ $detail->qty }}x @{{ $detail - > service - > price }}</span>
                        <span>{{ $detail->subtotal }}</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="line"></div>
        <div class="sumarry">
            <div class="row">
                <span>Sub Total</span>
                <span>Rp. {{ number_format($details->total) }}</span>
            </div>
        </div>
        <div class="line"></div>
        <footer class="text-center">
            Terima Kasih!
        </footer>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>
