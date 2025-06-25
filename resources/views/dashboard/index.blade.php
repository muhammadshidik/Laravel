{{-- @section digunakan untuk mendefinisikan bagian konten tertentu yang akan "ditempel" ke layout utama di tempat yang ditentukan oleh @yield. --}}
{{-- @extends Digunakan ketika kamu ingin memakai layout utama (biasanya layouts/app.blade.php atau layouts/master.blade.php), lalu menambahkan konten spesifik di dalamnya. --}}

@extends('app')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Example Card</h5>
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom
                            pages.</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Example Card</h5>
                        <p>This is an examle page with no contrnt. You can use it as a starter for your custom
                            pages.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
