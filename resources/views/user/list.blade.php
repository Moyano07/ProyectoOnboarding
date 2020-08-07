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
            {{-- <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Basic Table</h6>
            <p class="mg-b-25 mg-lg-b-50">Using the most basic table markup.</p> --}}

            <div class="bd bd-gray-300 rounded table-responsive">
                    <table class="table table-bordered table-colored table-primary mb-0">
                        <thead>
                          <tr class="text-center">
                            <th class="wd-25p text-center">Name</th>
                            <th class="wd-25p text-center">Email</th>
                            <th class="wd-10p text-center">Role</th>
                            <th class="text-center">Create At</th>
                            <th class="text-center" colspan="2">Actions</th>
                          </tr>
                        </thead>
                      <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>@foreach ($user->roles as $role){{($role->name)}} @endforeach</td>
                                <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
                                <td class="text-center">
                                    <a class="pd-0" href="{{ url('/') }}">edit</a>
                                </td>
                                <td class="text-center">
                                    <a class="pd-0" href="{{ url('/user/destroy/'.$user->id ) }}">delete</a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div><!-- table-wrapper -->


                </div>
            </div>

            </div>
        </div>


@endsection
