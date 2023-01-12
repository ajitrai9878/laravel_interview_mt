@extends('admin.master')
@section('title')
    {{__('Change Password')}}
@endsection
@section('css')
    <style>
        label.error {
            padding: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">User Change Password</h1>
            <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                {{@$data->first_name}} {{@$data->last_name}} ({{@$data->email}})
            </a>
        </div>
        <form method="post" action="{{route('password.update')}}"
              id="usersPasswordChange"
              autocomplete="off">
            @csrf
            <input type="hidden" name="id" value="{{@$data->id}}"/>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Password</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control pw" name="password" id="password" required
                                   value="" autocomplete="off">
                        </div>
                        <label id="password-error" class="error" for="password"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Confirm Password</h5>
                        </div>
                        <div class="card-body">
                            <input type="text" class="form-control pw" name="c_password" id="c_password"
                                   value="" autocomplete="off">
                        </div>
                        <label id="c_password-error" class="error" for="c_password"
                               style="display: none"></label>
                    </div>
                </div>
                <div class="col-12 col-lg-12" style="padding:20px;justify-content:center;display: flex;">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
@endsection

