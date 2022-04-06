@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Category</li>
    </ol>
    <form action="" method="POST" enctype="multipart/form-data">
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card mb-2">
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <h5>Add Category</h5>
                        <div class="mb-3">
                            <label for="categoryName" class="form-label"><strong>Category Name</strong></label>
                            <input type="text" name="categoryName" class="form-control form-control-sm" id="categoryName" aria-describedby="categoryName">
                            <span class="text-danger">@error('categoryName') {{ $message }} @enderror</span>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="category-list">
                <div class="card">
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <h5>Category List</h5>
                        <table style="font-size: 0.9rem">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category ID</th>
                                    <th>Category Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>23</td>
                                    <td>Solid Instrument</td>
                                    <td>12/03/2022</td>
                                    <td>
                                        <button type="button" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <button type="button" class="d-inline btn btn-danger btn-sm b-btn"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection