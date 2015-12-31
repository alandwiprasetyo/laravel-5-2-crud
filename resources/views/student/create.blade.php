@extends('layouts.main')
@section('content')
    {{--@if (count($errors) > 0)--}}
        {{--<div class="alert alert-danger">--}}
            {{--<ul>--}}
                {{--@foreach ($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}
    <form method="POST" action="{{ route('student.store') }}" >
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h1>Create data student</h1>
    <fieldset>
        <legend><span class="number">1</span>Fill the data</legend>
        <label for="name">FULL NAME:</label>
        <input type="text" id="name" name="full_name">

        <label for="mail">Email:</label>
        <input type="email" id="mail" name="email">

        <label for="name">Phone:</label>
        <input type="number" id="name" name="phone">

        <label for="name">Address:</label>
        <input type="text" id="name" name="address">

    </fieldset>
    <button type="submit">Create</button>
</form>
@endsection