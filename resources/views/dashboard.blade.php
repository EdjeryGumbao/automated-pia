@extends('layouts.general_layout')

@section('title', 'Dashboard')

@section('content')
    <p>Welcome to the Dashboard!</p>

    <a href="{{ url('/system_description') }}" class="btn btn-primary">Start Privacy Impact Assessment</a>
@stop