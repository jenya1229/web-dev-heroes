@extends('master')
<?php /** @var \App\User $user */ ?>
@section('content')

    <div class="row" id="app">
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
                <div class="col-md">
                    <div class="card">
                        <div class="card-header">Skills</div>
                        <div class="card-body">
                            @foreach($user->skills as $skill)
                                <span class="badge badge-primary">{{ $skill->name }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md">
                    <description text="{{ $user->profile->story }}"></description>
                </div>
            </div>
        </div>
    </div>

@endsection