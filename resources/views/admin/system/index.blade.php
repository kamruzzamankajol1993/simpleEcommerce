@extends('admin.master.master')

@section('title')
System Information
@endsection

@section('body')
<div class="pagetitle">
    <h1>System Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-header">
            <a type="button" class="btn btn-primary btn-sm" href="{{ route('systemInfo.create') }}">
              Add New Info
            </a>
            <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Large Modal</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                   <!-- TinyMCE Editor -->
              <textarea class="tinymce-editor">
                <p>Hello World!</p>
                <p>This is TinyMCE <strong>full</strong> editor</p>
              </textarea><!-- End TinyMCE Editor -->



                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">List</h5>


            <div class="table-responsive">
   <!-- Table with stripped rows -->
   <table class="table datatable">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Position</th>
        <th scope="col">Age</th>
        <th scope="col">Start Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Brandon Jacob</td>
        <td>Designer</td>
        <td>28</td>
        <td>2016-05-25</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Bridie Kessler</td>
        <td>Developer</td>
        <td>35</td>
        <td>2014-12-05</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Ashleigh Langosh</td>
        <td>Finance</td>
        <td>45</td>
        <td>2011-08-12</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Angus Grady</td>
        <td>HR</td>
        <td>34</td>
        <td>2012-06-11</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>Raheem Lehner</td>
        <td>Dynamic Division Officer</td>
        <td>47</td>
        <td>2011-04-19</td>
      </tr>
    </tbody>
  </table>
  <!-- End Table with stripped rows -->
</div>
          </div>
        </div>
      </div>
    </div>
      </section>
@endsection
