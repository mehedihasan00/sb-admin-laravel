@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Contents</li>
    </ol>
    <form action="" method="POST" enctype="multipart/form-data">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @csrf
        <div class="card mb-2">
            <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="ProductName" class="form-label"><strong>Product Name</strong></label>
                        <input type="text" name="productName" class="form-control form-control-sm" id="ProductName" aria-describedby="ProductName">
                        <span class="text-danger">@error('ProductName') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="categoryType" class="form-label"><strong>Category Type</strong></label>
                        <select name="categoryType" class="form-select form-select-sm" aria-label="Default select sliderStatus" id="categoryType">
                            <option selected>Instrumental</option>
                            <option value="">Liquid</option>
                            <option value="">Gas</option>
                            <option value="">Frazail</option>
                        </select>
                        <span class="text-danger">@error('categoryType') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="prductShortDesc" class="form-label"><strong>Product Short Description</strong></label>
                        <textarea name="prductShortDesc" class="form-control" id="prductShortDesc" style="height: 89px"></textarea>
                    </div>
                    <span class="text-danger">@error('prductShortDesc') {{ $message }} @enderror</span>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="productDesc" class="form-label"><strong>Product Description</strong></label>
                        <textarea name="productDesc" class="form-control" id="productDesc"></textarea>
                        <span class="text-danger">@error('productDesc') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="ProductCover" class="form-label"><strong>Cover Image</strong></label>
                        <input type="file" name="productCover" class="form-control form-control-sm" id="ProductCover" aria-describedby="ProductCover" accept="image/*" onchange="loadFile(event)">
                        <span class="text-danger">@error('ProductCover') {{ $message }} @enderror</span>
                        <img id="output1" src="" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="prodMultipleImage" class="form-label"><strong>Other Images</strong></label>
                        <input type="file" name="prodMultipleImage" class="form-control form-control-sm" id="prodMultipleImage" aria-describedby="prodMultipleImage" multiple="">
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
            <div class="col-12 col-md-9">
                <div class="card">
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <table style="font-size: 0.9rem">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Product Name</th>
                                    <th>Cover Image</th>
                                    <th colspan=2>Other Images</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>23</td>
                                    <td><img src="" alt="Cover Image" srcset=""></td>
                                    <td colspan=2><img src="" alt="Other Images" srcset=""></td>
                                    <td>22/02/22</td>
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