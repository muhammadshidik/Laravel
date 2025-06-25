@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card-shadow">
                    <div class="card-header">
                        <h1>Create Service</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <label for="" class="form-lable">Service Name</label>
                        <input type="text" name="service_name" class="form-control">
                        <label for="" class="form-lable">Price</label>
                        <input type="text" name="price" class="form-control">
                        <label for="" class="form-lable">Description</label>
                        <textarea type="text" name="description" class="form-control" cols="30" rows="5"></textarea>
                        <button type="submit" class="btn btn-primary mt-2">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
