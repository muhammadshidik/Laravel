@extends('app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title }}</h3>
                    <div class="mb-3" align="right">
                        <a href="{{ route('service.create') }}" class="btn btn-success">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama Service</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            @foreach ($datas as $index => $data)
                                <td>{{ $index += 1 }}</td>
                                <td>{{ $data->service_name }}</td>
                                <td>{{ number_format($data->price) }}</td>
                                <td>{{ $data->description }}</td>
                                <td>
                                    <a href="{{ route('service.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('service.destroy', $data->id) }}" method="POST"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"
                                            onclick="return confirm('Yakin Ingin diHapus?')">Delete</button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
