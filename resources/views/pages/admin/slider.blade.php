@extends('layouts.master')
@section('admin-content')
<div class="container-fluid px-4">
    <ol class="breadcrumb my-2 nav-path">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Slider</li>
    </ol>
    <div class="row">
                @php 
                    // $sliders as $slider
                    //echo $slider->id; 
                    //echo "<br>";
                    //echo "<br>";
                @endphp
        <div class="col-12 col-lg-6 mb-md-3">
            <form action="{{ url('slider/insert') }}" method="POST" enctype="multipart/form-data">
                @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Add Slider+</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="sliderTitle" class="form-label"><strong>Slider Title</strong></label>
                            <input type="text" name="sliderTitle" class="form-control form-control-sm" id="sliderTitle" aria-describedby="sliderTitle">
                            <span class="text-danger">@error('sliderTitle') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="sliderImage" class="form-label"><strong>Slider Image</strong></label>
                            <input type="file" name="sliderImage" class="form-control form-control-sm" id="sliderImage" aria-describedby="sliderImage" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('sliderImage') {{ $message }} @enderror</span>
                            <img id="output1" style="display:none; max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <div class="mb-3">
                            <label for="sliderStatus" class="form-label"><strong>Slider Status</strong></label>
                            <select name="sliderStatus" class="form-select form-select-sm" aria-label="Default select sliderStatus" id="sliderStatus">
                                <option value="1">On</option>
                                <option value="0">off</option>
                            </select>
                            <span class="text-danger">@error('sliderStatus') {{ $message }} @enderror</span>
                        </div>    
                        <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-mod-content-submit btn-sm">Add</button>
                        </div>
                    </div>
                </div>           
            </form>
        </div>
        <div class="col-12 col-lg-6">
            <div class="slider-list">
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Slider List</h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <table style="font-size: 0.8rem">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Slider Title</th>
                                    <th>Slider Image</th>
                                    <th>Slider Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $count = 1; @endphp
                                @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $count++ }}</td>
                                    <td>{{ $slider->sliderTitle }}</td>
                                    <td><img src="{{ asset($slider->sliderImage) }}" alt="" style="height: 33px; width: 50px;"></td>
                                    <td>
                                        @if($slider->sliderStatus == 0) 
                                            <span>off</span>
                                        @else 
                                            <span>On</span>
                                        @endif
                                    </td>
                                    <!-- <td style="padding: 0.3rem 0.25rem 0.25rem;"> -->
                                    <td>
                                        <button type="button" onclick="window.location.href='{{ asset('slider/edit/'. $slider->id) }}'" class="d-inline btn btn-primary btn-sm b-btn"><i class="fas fa-user-edit"></i></button>
                                        <button type="button" onclick="window.location.href='{{ asset('delete/product') }}'" class="d-inline btn btn-danger btn-sm b-btn"><i class="fas fa-trash"></i></button>
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