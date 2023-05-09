@extends('layouts.default')
@section('title','Home')
@section('content')
<div class="w-full flex center justify-center items-center flex-col h-screen">
    <x-BannerLogin/>
</div>
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/inputs.css') }}">
<link rel="stylesheet" href="{{ asset('css/background.css') }}">
@endsection
