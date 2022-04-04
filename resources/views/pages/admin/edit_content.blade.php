@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Edit Contents</li>
    </ol>
    <form action="{{ route('store.home') }}" method="POST" enctype="multipart/form-data">
        @if(Session::get('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @csrf
        <div class="card">
            <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                <div class="row">
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="companyName" class="form-label"><strong>Company Name</strong></label>
                        <input type="text" name="companyName" class="form-control form-control-sm" id="companyName" aria-describedby="companyName">
                        <span class="text-danger">@error('companyName') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="companyAddress" class="form-label"><strong>Company Address</strong></label>
                        <input type="text" name="companyAddress" class="form-control form-control-sm" id="companyAddress" aria-describedby="companyAddress">
                        <span class="text-danger">@error('companyAddress') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="companyLogo" class="form-label"><strong>Company Logo</strong></label>
                        <input type="file" name="companyLogo" class="form-control form-control-sm" id="companyLogo" aria-describedby="companyLogo" accept="image/*" onchange="loadFile(event)">
                        <img id="output1" style="display: none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        <span class="text-danger">@error('company_logo') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="aboutImage" class="form-label"><strong>About Section's Image</strong></label>
                        <input type="file" name="aboutImage" class="form-control form-control-sm" id="aboutImage" aria-describedby="aboutImage" accept="image/*" onchange="loadFile2(event)">
                        <span class="text-danger">@error('aboutImage') {{ $message }} @enderror</span>
                        <img id="output2" style="display: none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                    </div>
                </div>                   
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="aboutCompany" class="form-label"><strong>About Our Company</strong></label>
                        <textarea name="aboutCompany" class="form-control" id="aboutCompany" rows="3"></textarea>
                        <span class="text-danger">@error('aboutCompany') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="chairmanMessage" class="form-label"><strong>Chairman Message</strong></label>
                        <textarea name="chairmanMessage" class="form-control form-control-sm" id="chairmanMessage" style="height: 88.94px"></textarea>
                        <span class="text-danger">@error('chairmanMessage') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <strong>Social Links</strong>
                    <div class="mb-1 row link-row">
                        <label for="facebookLink" class="col-sm-3 col-form-label">Facebook Link</label>
                        <div class="col-sm-9 d-flex align-items-center">
                            <input type="text" name="facebokLink" class="form-control form-control-sm" id="facebookLink">
                        </div>
                    </div>
                    <div class="mb-1 row link-row">
                        <label for="linkedInLink" class="col-sm-3 col-form-label">LinkedIn Link</label>
                        <div class="col-sm-9 d-flex align-items-center">
                            <input type="text" name="linkedInLink" class="form-control form-control-sm" id="linkedInLink">
                        </div>
                    </div>
                    <div class="mb-1 row link-row">
                        <label for="twitterLink" class="col-sm-3 col-form-label">Twitter Link</label>
                        <div class="col-sm-9 d-flex align-items-center">
                            <input type="text" name="twitterLink" class="form-control form-control-sm" id="twitterLink">
                        </div>
                    </div>
                    <div class="mb-1 row link-row">
                        <label for="instagramLink" class="col-sm-3 col-form-label">Instagram Link</label>
                        <div class="col-sm-9 d-flex align-items-center">
                            <input type="text" name="instagramLink" class="form-control form-control-sm" id="instagramLink">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="mb-3">
                        <label for="chairmanName" class="form-label"><strong>Chairman Name</strong></label>
                        <input type="text" name="chairmanName" class="form-control form-control-sm" id="chairmanName" placeholder="Chairman Name">
                        <span class="text-danger">@error('chairmanName') {{ $message }} @enderror</span>
                    </div>
                    <div class="mb-3">
                        <label for="chairmanImage" class="form-label"><strong>Chairman Image</strong></label>
                        <input type="file" name="chairmanImage" class="form-control form-control-sm" id="chairmanImage" placeholder="Chairman Image" accept="image/*" onchange="loadFile3(event)">
                        <span class="text-danger">@error('chairmanImage') {{ $message }} @enderror</span>
                        <img id="output3" style="display: none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                    </div>     
                </div>
                <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                <div class="col-12 d-flex justify-content-end">
                    <!-- <input type="submit" value="submit" /> -->
                    <button type="submit" class="btn btn-mod-content-submit btn-sm">Update</button>
                </div>
                </div>
            </div>
        </div>
    </form>      
</div>
@endsection