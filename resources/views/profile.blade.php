@extends('master')
<?php /** @var \App\User $user */ ?>
@section('content')

    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="img/180x180.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">{{ $user->name }}</h4>
                    <p class="card-text">{{ $user->profile->specialization }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">

            </div>
        </div>
    </div>

@endsection