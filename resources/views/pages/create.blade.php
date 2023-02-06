@extends('layouts.main-layout')

@section('content')
    <h1>Add new person</h1>

    <form method="POST" action="{{ route('person.store') }}">
        @csrf

        <label for="firstName">First name:</label>
        <input type="text" name="firstName">

        <label for="laststName">Last name:</label>
        <input type="text" name="lastName">

        <label for="dateOfBirth">Born in:</label>
        <input type="date" name="dateOfBirth">

        <label for="height">Height in cm:</label>
        <input type="number" name="height">

        <input type="submit" value="ADD">
    </form>
@endsection