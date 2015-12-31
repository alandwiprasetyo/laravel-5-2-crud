@extends('layouts.main')
@section('content')
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <h1>Edit data student</h1>
        <fieldset>
            <legend><span class="number">1</span>Fill the data</legend>
            <label for="name">FULL NAME:</label>
            <input type="text" id="name" name="full_name" value="{{ $student->full_name }}">

            <label for="mail">Email:</label>
            <input type="email" id="mail" name="email" value="{{ $student->email }}">

            <label for="name">Phone:</label>
            <input type="number" id="name" name="phone" value="{{ $student->phone }}">

            <label for="name">Address:</label>
            <input type="text" id="name" name="address" value="{{ $student->address }}">

        </fieldset>
        <button type="submit">Edit</button>
    </form>
@endsection