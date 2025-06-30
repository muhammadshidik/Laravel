@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title }}</h3>
                    <form action="{{ route('customer.update', $edit->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="">Nama </label>
                        <input value="{{ $edit->name }}" class="form-control" type="text" name="name" id=""
                            placeholder="Masukkan Nama Customer" required>


                        <label for="">Telp </label>
                        <input value="{{ $edit->phone }}" class="form-control" type="text" name="phone"
                            id="">


                        <label for="">Alamat *</label>
                        <textarea value="{{ $edit->alamat }}" class="form-control" cols="30" rows="5" type="text" name="alamat"
                            id=""></textarea>


                        <button class="btn btn-primary mt-2" type="submit">Simpan perubahan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-success btn-sm"></a>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
