@extends('panel.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Role</h1>
</div>
<!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('_message')
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">Role List</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ url('panel/role/add') }}" class="btn btn-primary float-md-end mt-2">Add Role</a>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getRecord as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                <td>
                                    <a href="{{ url('panel/role/edit/' .$value->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <a href="{{ url('panel/role/delete/' .$value->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>
        </div>
    </div>
</section>
@endsection