@extends('admin.master.master')

@section('title')
Update System Information
@endsection

@section('body')

<div class="pagetitle">
    <h1>System Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Form</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
            <div class="card-body">

                <h5 class="card-title">Update Data</h5>


                <form class="row g-3" method="post" action="{{ route('systemInfo.update',$allSystemInfo->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                    <div class="col-6">
                      <label for="inputNanme4" class="form-label">websiteName</label>
                      <input type="text" name="websiteName" value="{{ $allSystemInfo->websiteName }}" class="form-control" id="inputNanme4">
                    </div>
                    <div class="col-6">
                      <label for="inputEmail4" class="form-label">websitePhone</label>
                      <input type="number" class="form-control" value="{{ $allSystemInfo->websitePhone }}" name="websitePhone" id="inputEmail4">
                    </div>
                    <div class="col-6">
                      <label for="inputPassword4" class="form-label">websiteEmail</label>
                      <input type="email" class="form-control" value="{{ $allSystemInfo->websiteEmail }}" name="websiteEmail" id="inputPassword4">
                    </div>
                    <div class="col-6">
                      <label for="inputAddress" class="form-label">websiteAddress</label>
                      <input type="text" class="form-control" value="{{ $allSystemInfo->websiteAddress }}" name="websiteAddress" id="inputAddress" placeholder="1234 Main St">
                    </div>


                    <div class="col-6">
                        <label for="inputAddress1" class="form-label">websiteAbout</label>
                        <input type="text" class="form-control" value="{{ $allSystemInfo->websiteAbout }}" name="websiteAbout" id="inputAddress1">
                      </div>


                      <div class="col-6">
                        <label for="inputAddress11" class="form-label">Url name</label>
                        <input type="text" class="form-control" value="{{ $allSystemInfo->url_name }}" name="url_name" id="inputAddress11">
                      </div>

                      <div class="col-6">
                        <label for="inputAddress2" class="form-label">websiteLogo</label>
                        <input type="file" class="form-control"  name="websiteLogo" id="inputAddress2">
                        <small class="text-danger">Size : 386*99</small>
                       <img src="{{ asset('/') }}{{ $allSystemInfo->websiteLogo }}" width="80px" alt="">
                      </div>

                      <div class="col-6">
                        <label for="inputAddress3" class="form-label">websiteIcon</label>
                        <input type="file" class="form-control"  name="websiteIcon" id="inputAddress3">
                        <small class="text-danger">Size : 50*50</small>


<img src="{{ asset('/') }}{{ $allSystemInfo->websiteIcon }}" width="80px" alt="">


                      </div>


                    <div class="text-center">
                      <button type="submit" class="btn btn-success">Update Data</button>

                    </div>
                  </form>




            {{-- <!-- TinyMCE Editor -->
            <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
              </textarea><!-- End TinyMCE Editor --> --}}


            </div>

        </div>

      </div>

    </div>
  </section>

@endsection
