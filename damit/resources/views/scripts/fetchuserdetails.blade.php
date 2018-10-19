@extends('layouts.app')

@section('content')
    @if(count($alluserdetails) > 0)
        @foreach($alluserdetails as $userdetail)
            <a href="/userdetails/{{ $userdetail->sr_no }}"><h2>{{$userdetail->email}}</h2><br></a>
        @endforeach
    @else
        <p>No user found</p>
    @endif
@endsection