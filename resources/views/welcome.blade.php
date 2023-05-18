@extends('layouts.main')
@section('title', 'Welcome to NOVAJI INTROSERVE Platform')
@section('description', 'This is the best platform to get the best of your fashion and accessories productsa at affordable price')
@section('content')

<x-categories :categories />

<x-product-squad :squad />

<x-product-trend :trend />

<x-offers :offers />

@endsection