@extends('app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title }}</h3>
                    <form action="{{ route('service.store') }}" method="POST">
                        @csrf
                        <label for="{{ 'service.store' }}" class="form-lable">Service Name</label>
                        <input type="text" name="service_name" class="form-control">
                        <label for="" class="form-lable">Price</label>
                        <input type="text" name="price" class="form-control">
                        <label for="" class="form-lable">Description</label>
                        <textarea type="text" name="description" class="form-control" cols="30" rows="5"></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Create</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-2">Back</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
