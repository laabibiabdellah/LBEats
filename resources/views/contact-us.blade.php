@php
    // Get the current path and capitalize the first letter
    $currentPath = ucfirst(request()->path()) . ' Us';
@endphp
@props([
    // Set the page title based on the current path
    'pageTitle' => 'Welcome to ' . $currentPath . ' page',
    // Pass the current path to the layout
    'currentPath' => $currentPath,
])

@extends('layouts.scope')

@section('scope')

@include('_COMPONENTS.contact')

@endsection