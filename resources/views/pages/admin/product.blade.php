@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Product</li>
    </ol>
    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
        @if(Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @csrf
        <div class="card mb-3 add-product">
            <div class="card-header card-mod-back">
                <h5 class="add-category">Insert Product Information</h5>
            </div>
            <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-1">
                        <label for="ProductName" class="form-label"><strong>Product Name</strong></label>
                        <input type="text" name="productName" class="form-control form-control-sm" id="ProductName" aria-describedby="ProductName">
                        <span class="text-danger">@error('ProductName') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-2">
                        <label for="categoryType" class="form-label"><strong>Category Type</strong></label>
                        <select name="categoryType" class="form-select form-select-sm" aria-label="Default select sliderStatus" id="categoryType">
                            @foreach($categories as $category)
                            <option value="{{ $category->categoryName }}">{{ $category->categoryName }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('categoryType') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-2">
                        <label for="prductShortDesc" class="form-label"><strong>Product Short Description</strong></label>
                        <textarea name="prductShortDesc" class="form-control" id="prductShortDesc" style="height: 89px"></textarea>
                    </div>
                    <span class="text-danger">@error('prductShortDesc') {{ $message }} @enderror</span>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-2">
                        <label for="productDesc" class="form-label"><strong>Product Description</strong></label>
                        <textarea name="productDesc" class="form-control" id="productDesc"></textarea>
                        <span class="text-danger">@error('productDesc') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-2">
                        <label for="ProductCover" class="form-label"><strong>Cover Image</strong></label>
                        <input type="file" name="productCover" class="form-control form-control-sm" id="ProductCover" aria-describedby="ProductCover" accept="image/*" onchange="loadFile(event)">
                        <span class="text-danger">@error('ProductCover') {{ $message }} @enderror</span>
                        <img id="output1" src="" style="display: none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-2">
                        <label for="prodMultipleImage" class="form-label"><strong>Other Images</strong></label>
                        <input type="file" name="prodMultipleImage[]" class="form-control form-control-sm" id="prodMultipleImage" aria-describedby="prodMultipleImage" multiple>
                        <span class="text-danger">@error('prodMultipleImage') {{ $message }} @enderror</span>  
                        <div class="upload__img-wrap"></div>
                        <!-- <div class="upload__box">
                            <div class="upload__btn-box">
                                <label class="upload__btn">
                                <p>Upload images</p>
                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                </label>
                            </div>
                            <div class="upload__img-wrap"></div>
                        </div> -->
                    </div>
                </div>                   
                <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                <div class="col-12 d-flex justify-content-end">
                    <!-- <input type="submit" value="submit" /> -->
                    <button type="submit" class="btn btn-mod-content-submit btn-sm">Add Product</button>
                </div>
                </div>
            </div>
        </div>
    </form>
    
    <div class="product-list">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1 table-responsive" style="font-size: 0.9rem">
                        <table style="font-size: 0.9rem">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Image</th>
                                    <th>Product Short Description</th>
                                    <th>Product Long Description</th>
                                    <th colspan="2">Other Images</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $product->productName }}</td>
                                    <td>{{ $product->categoryType }}</td>
                                    <td><img src="{{ asset($product->productCover) }}" alt="Cover Image" style="height: 40px; width: 53px" ></td>
                                    <td>{{ $product->prductShortDesc }}</td>
                                    <td>{!! $product->productDesc !!}</td>
                                    <td colspan="2">
                                        <img src="" alt="Other Images" srcset="" style="width: 15px; height: 15px">
                                    </td>
                                    <td>{{ $product->created_at }}</td>
                                    <td class="d-flex gap-1">
                                        <button type="button" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <button type="button" class="d-inline btn btn-danger btn-sm b-btn"><i class="fas fa-trash"></i></button>
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