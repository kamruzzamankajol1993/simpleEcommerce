@extends('admin.master.master')

@section('title')
Message Detail
@endsection

@section('body')
<div class="pagetitle">
    <h1>Message Detail</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Detail</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            {{-- <a type="button" class="btn btn-primary btn-sm" href="{{ route('privacyPolicy.create') }}">
                <i class="bx bxs-plus-circle"></i> Add New Info
            </a> --}}

          </div>
          <div class="card-body">
            <h5 class="card-title">Detail</h5>
@include('flash_message')

   

        <td>{{ $allSystemInfo->subject }}</td><br>
        <td>{{ $allSystemInfo->name }}</td><br>
        <td>{{ $allSystemInfo->email }}</td><br>
        <td>{{ $allSystemInfo->phone }}</td><br>
        <td>{{ $allSystemInfo->message }}</td>

          </div>
        </div>
      </div>
    </div>
      </section>
@endsection
