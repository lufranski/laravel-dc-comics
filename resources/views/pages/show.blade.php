@extends('layouts.main-layout')

@section('content')
    
    <h3>
        {{ $person -> firstName }} {{ $person -> lastName }}
    </h3>

    <h6>
        Born in: {{ $person -> dateOfBirth }}
    </h6>

    <h6>
        Height: {{ $person -> height }} cm
    </h6>

@endsection