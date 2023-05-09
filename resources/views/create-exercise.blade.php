@extends('layouts.default')
@section('title','Home')
@section('content')
<div class="w-full flex flex-col h-screen bg-black background-login-register">
    <div>
        <x-select-muscle :groups="$muscleGroups"/>
    </div>    
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/inputs.css') }}">
<link rel="stylesheet" href="{{ asset('css/background.css') }}">
@endsection
