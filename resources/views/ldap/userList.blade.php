@extends('layouts.app')

@section('content')
{{-- {{dump($users)}} --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listados de usuarios Ldap 1</div>

                <div class="card-body">
                    @foreach ($users as $user)
                    @if($user->samaccountname !== null ){{$user->samaccountname[0]}} <br>@endif
                    @if($user->cn !== null ){{$user->cn[0]}} <br>@endif
                    @if($user->mail !== null )-  {{$user->mail[0]}}<br> @endif
                    @if($user->department !== null )  {{$user->department[0]}}<br>@endif
                    @if($user->group !== null )gg   {{$user->group[0]}}<br>  @endif
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
