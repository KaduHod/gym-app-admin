@extends('layouts.default')
@section('title','Home')
@section('content')
<div class="w-full flex center items-center flex-col h-screen bg-black background-login-register">
    <x-register/>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/register.js') }}" type="module"></script>
<script src="{{ asset('js/validate.js') }}" type="module"></script>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/inputs.css') }}">
<link rel="stylesheet" href="{{ asset('css/background.css') }}">
@endsection
