@extends('layouts.master')

@section('header')
    <a href="{{ url('cats') }} ">Back to overview</a>
    <h2>
        Delete this cat  {{ $cat->name }}?
    </h2>
@stop

@section('content')
    {!! Form::model($cat, ['url' => '/cats/'.$cat->id, 'method' => 'delete']) !!}
    <p> Name: {{ $cat->name }}</p>
    <p> Date of birth: {{ $cat->date_of_birth }}</p>
    <p> Breed: {{ $cat->breed->name }}</p>
    {!! Form::submit('DELETE', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop