@extends('layouts.main-layout')

@section('content')
    
    <h1>Edit already existent person</h1>

    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf

        <label for="firstName">First name:</label>
        <input type="text" name="firstName" value="{{ $person -> firstName }}">

        <label for="laststName">Last name:</label>
        <input type="text" name="lastName" value="{{ $person -> lastName }}">

        <label for="dateOfBirth">Born in:</label>
        <input type="date" name="dateOfBirth" value="{{ $person -> dateOfBirth }}">

        <label for="height">Height in cm:</label>
        <input type="number" name="height" value="{{ $person -> height }}">

        <input type="submit" value="UPDATE">
    </form>

@endsection