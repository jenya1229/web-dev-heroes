@extends('master')

@section('content')

    <p>profile</p>
    <p>
        <a href="{{url('/skills')}}">skills</a>
    </p>
    <div>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form"
              action="{{ route('logout') }}"
              method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>

@endsection