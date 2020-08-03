@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ultimas publicaciones</div>

                <div class="card-body">
                    @foreach ($publications as $publication)
                    <p>{{$publication->title}}</p>
                    <p>{{$publication->content}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
