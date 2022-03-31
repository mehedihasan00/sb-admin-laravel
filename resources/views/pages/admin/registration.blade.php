@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Charts</li>
    </ol>
    <div class="row">
        <div class="col-md-4 offeset-md-4">
            <div class="card border-0 rounded-lg" style="background-color: antiquewhite;">
                <div class="card-header b-card-header"><h3 class="text-center font-weight-light my-2">Create Account</h3></div>
                <div class="card-body">
                    <form class="px-2" action="{{ route('auth.save') }}" method="post">
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @csrf
                        <div class="row my-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-2 mb-md-0">
                                    <input name="name" class="form-control b-floating-input" id="inputFirstName" type="text" placeholder="Enter your name"  value="{{ old('name') }}" />
                                    <label for="inputFirstName" class="b-floating-lebel">Name</label>
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating my-3">
                                <input name="email" class="form-control b-floating-input" id="inputEmail" type="email" placeholder="name@example.com" value="{{ old('email') }}" />
                                <label for="inputEmail" class="b-floating-lebel">Email address</label>
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input name="password" class="form-control b-floating-input" id="inputPassword" type="password" placeholder="Create a password" />
                                <label for="inputPassword" class="b-floating-lebel">Password</label>
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                        </div>
                        <div class="d-flex mt-2 mb-0 align-items-center justify-content-end">
                            <button type="submit" class="btn btn-primary btn-sm">Register</button>
                            <!-- <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div> -->
                        </div>
                    </form>
                </div>
                <!-- <div class="card-footer text-center py-4">
                    <div class="small"><a href="{{ route('auth.login') }}">Have an account? Go to login</a></div>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection