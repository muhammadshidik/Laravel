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
                        <div class="mb-3">
                            <label for="" class="form-lable">Service Name</label>
                            <input value="{{ $service->service_name }}" type="text" name="service_name"
                                class="form-control">
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="" class="form-lable">Price</label>
                            <input value="{{ $service->price }}" type="text" name="price" class="form-control">
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="" class="form-lable">Description</label>
                            <textarea type="text" name="description" class="form-control" cols="30" rows="5"
                                value="{{ $service->description }}"> </textarea>
                        </div>
                        <div class="mt-3 mb-3">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
