@extends('layouts.master')

@section('header')
    <a href="{{ url('cats') }} ">Back to overview</a>
    <h2>
        {{ $cat->name }}
    </h2>
    <a href="{{ url('cats/' . $cat->id .'/edit') }}">
        Edit
    </a>
    <a href="{{ url('cats/'.$cat->id.'/delete') }}">
        <span class="glyphicon glyphicon-trash"></span>
        Delete
    </a>
@stop

@section('content')
    <p> Name: {{ $cat->name }}</p>
    <p> Date of birth: {{ $cat->date_of_birth }}</p>
    <p> Breed: {{ $cat->breed->name }}</p>
@stop