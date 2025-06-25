@extends('app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11"></div>
            <div class="card">
                <div class="card-header text-center">
                    <h1>Service Manage</h1>
                </div>
                <div class="card-body">
                    <a href="{{ url('insert/service') }}" class="btn btn-primary mt-2 mb-2">Create</a>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama Service</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-success">Edit</a>
                                <form action="" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" name="delete"
                                        onclick="('Are you sure??')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
