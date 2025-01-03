@extends('panel.layouts.app')
@section('content')
<div class="pagetitle">
    <h1>Role</h1>
</div>
<!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Role</h5>

                    <!-- General Form Elements -->
                    <form action="" method="POST">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label">Name</label>
                            <div class="col-sm-12">
                                <input type="text" name="name" value="{{ $getRecord->name }}" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-12 col-form-label" style="display: block; margin-bottom: 20px;"><b>Permission</b></label>
                            @foreach ($getPermission as $value)
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-md-3">
                                    {{ $value['name'] }}
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        @foreach ($value['group'] as $group) @php $checked = ''; @endphp @foreach ($getRolePermission as $role) @if ($role->permission_id == $group['id']) @php $checked = 'checked'; @endphp @endif @endforeach
                                        <div class="col-md-3">
                                            <label for="">
                                                <input type="checkbox" {{ $checked }} name="permission_id[]" value="{{ $group['id'] }}" id=""> {{ $group['name'] }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <hr /> @endforeach
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>

                    </form>
                    <!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>
@endsection