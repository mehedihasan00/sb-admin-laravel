@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Category</li>
    </ol>
    <div class="row">
        <div class="col-12 col-lg-6 mb-3 mb-lg-0">
            @php
                //echo($categories[0]->id);
                //echo "<br>";
                //echo($categories[1]->id);
            @endphp
            <form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
                @if(Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                @csrf
                <div class="card mb-3 mb-md-0">
                    <div class="card-header card-mod-back">
                        <h5 class="add-category">Add Category</h5>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label"><strong>Category Name</strong></label>
                            <input type="text" name="categoryName" class="form-control form-control-sm" id="categoryName" aria-describedby="categoryName" placeholder="Add a Category Name">
                            <span class="text-danger">@error('categoryName') {{ $message }} @enderror</span>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add+</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-6">
            <div class="category-list">
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-category">Category List</h5>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <table style="font-size: 0.9rem">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Category Name</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $count = 1 @endphp
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $category->categoryName }}</td>
                                    <td>
                                        @if($category->created_at == NULL)
                                            <span class="text-danger">No date set</span>
                                        @else
                                            {{ $category->created_at->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td class="d-flex gap-1">
                                        <a href="{{ url('category/edit/'. $category->id) }}" type="submit" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <a href="{{ url('category/delete/'.$category->id) }}" type="submit" class="d-inline btn btn-danger btn-sm b-btn" onclick="confirmDel()"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection