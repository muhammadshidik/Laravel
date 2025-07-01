@extends('app')
@section('content')
    <div class="row">
        <div class="col-12">
            <di class="card">
                <div class="card-body">
                    <h3 class="card-title">
                        {{ $title }}
                    </h3>
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="" class="form-lable"> Nama</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">

                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="{{ $user->password }}" required>
                        <button type="submit" class="btn btn-primary mt-2">Simpan perubahan</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-2">Kembali</a>
                    </form>
                </div>
            </di>
        </div>
    </div>
@endsection
