@extends('app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title }}</h3>
                    <form action="{{ route('service.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="" class="form-lable">Service Name</label>
                        <input value="{{ $service->service_name }}" type="text" name="service_name" class="form-control">
                        <label for="" class="form-lable">Price</label>
                        <input value="{{ $service->price }}" type="text" name="price" class="form-control">
                        <label for="" class="form-lable">Description</label>
                        <textarea type="text" name="description" class="form-control" cols="30" rows="5"> value="{{ $service->description }}"</textarea>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-2">Back</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
