@extends('layouts.main-layout')

@section('content')

    <h1>People</h1>

    <ul>
        @foreach ($people as $person)
            
            <li>
                <h6>

                    {{ $person -> firstName }} {{ $person -> lastName }} 
                </h6>
                <p>
                    Born in: {{ $person -> dateOfBirth }}, Height: {{ $person -> height }} cm
                </p>
            </li>
        @endforeach
    </ul>
    
@endsection