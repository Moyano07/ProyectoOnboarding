@extends('layouts.app')

@section('content')
@push('head')
<!-- Styles -->
{{-- <link href="{{ asset('css/pizza.css') }}" rel="stylesheet">
<!-- Scripts -->
<script src="{{ asset('js/components/pizza.js')}}"></script> --}}
<link href="{{ asset('css/bracket.css') }}" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


@endpush


        <div class="br-pageheader pd-y-15 pd-l-20">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ url('/') }}">Home</a>
            <span class="breadcrumb-item active">User List</span>
          </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
          <h4 class="tx-gray-800 mg-b-5">User List</h4>
        </div>

            <div class="br-pagebody">
              <div class="br-section-wrapper">
                <div class="col-xl-6">
                    <div class="form-layout form-layout-4">
                      <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Left Label Alignment</h6>
                      <p class="mg-b-30 tx-gray-600">A basic form where labels are aligned in left.</p>
                      <div class="row">
                        <label class="col-sm-4 form-control-label">Firstname: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                          <input type="text" class="form-control" placeholder="Enter firstname">
                        </div>
                      </div><!-- row -->
                      <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Lastname: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                          <input type="text" class="form-control" placeholder="Enter lastname">
                        </div>
                      </div>
                      <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                          <input type="text" class="form-control" placeholder="Enter email address">
                        </div>
                      </div>
                      <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Address: <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                          <textarea rows="2" class="form-control" placeholder="Enter your address"></textarea>
                        </div>
                      </div>
                      <div class="form-layout-footer mg-t-30">
                        <button class="btn btn-info">Submit Form</button>
                        <button class="btn btn-secondary">Cancel</button>
                      </div><!-- form-layout-footer -->
                    </div><!-
              </div>
            </div>

            </div>
        </div>


@endsection
