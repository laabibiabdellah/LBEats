@php
    $currentPath = ucfirst(request()->path());
@endphp
@props([
    'pageTitle' => 'Welcome to ' . $currentPath . ' page',
    'currentPath' => $currentPath,
])

@extends('layouts.scope')

@section('scope')

@include('_COMPONENTS.cart')

@endsection
