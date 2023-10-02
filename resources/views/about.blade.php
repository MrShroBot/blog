@extends('layout')

@section('content')
    <h1 class="text-3xl font-bold underline">
        Hello about!
    </h1>
    <span class="loading loading-infinity loading-lg"></span>
    <input type="range" min="0" max="100" value="40" class="range range-primary" />
@endsection
