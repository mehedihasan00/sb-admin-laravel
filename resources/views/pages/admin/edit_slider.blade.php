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
            <form action="{{ url('slider/update/'.$slider->id) }}" method="POST" enctype="multipart/form-data">
                @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @csrf
                <div class="card">
                    <div class="card-header card-mod-back">
                        <h5 class="add-slider">Update Slider <span class="text-danger">{{ $slider->sliderTitle }}</span></h4>
                    </div>
                    <div class="card-body b-card-body bg-light rounded px-2 px-md-3 py-1 py-md-1" style="font-size: 0.9rem">
                        <!-- <hr style="margin-top: 0.5rem; margin-bottom: 0.3rem; opacity: 0.1"> -->
                        <div class="mb-3">
                            <label for="sliderTitle" class="form-label"><strong>Slider Title</strong></label>
                            <input type="text" name="sliderTitle" class="form-control form-control-sm" id="sliderTitle" aria-describedby="sliderTitle" value="{{ $slider->sliderTitle }}">
                            <span class="text-danger">@error('sliderTitle') {{ $message }} @enderror</span>
                        </div>
                        <div class="mb-3">
                            <label for="sliderImage" class="form-label"><strong>Slider Image</strong></label>
                            <input type="file" name="sliderImage" class="form-control form-control-sm" id="sliderImage" aria-describedby="sliderImage" accept="image/*" onchange="loadFile(event)">
                            <span class="text-danger">@error('sliderImage') {{ $message }} @enderror</span>
                            <img id="output1" src="{{ asset('frontend/assets/img/upload/slider/'. $slider->sliderImage) }}" style="max-width: 140px; max-height: 120px; padding-top: 0.5rem"/>
                        </div>
                        <div class="mb-3">
                            <label for="sliderStatus" class="form-label"><strong>Slider Status</strong></label>
                            <select name="sliderStatus" class="form-select form-select-sm" aria-label="Default select sliderStatus" id="sliderStatus">
                                @if($slider->sliderStatus == 1)
                                <option value = "1">On</option>
                                <option value="0">off</option>
                                @else
                                <option value = "0">Off</option>
                                <option value="1">On</option>
                                @endif
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
    </div>
</div>
@endsection