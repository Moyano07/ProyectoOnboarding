@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listados de usuarios Ldap 1</div>

                <div class="card-body">
                    @foreach ($users as $user)
                    <p>{{$user->sAMAccountName[0]}}  @if($user->mail !== null )-  {{$user->mail[0]}} @endif </p>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
