@extends('layouts.app')
@include("layouts.navbar.navbar")
@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div>
            <img src="{{ asset('Logo/Homepage Hero Banner.png') }}" class="img-fluid" alt="Cook from Home Hero Image">
        </div>
        <div class="col-md-8">
            <div>
                <h1>Start your plan</h1>
                <p class="fs-5 col-md-8">Start your journey to learn cooking quick and easy for your loves one. No need to shop all the main ingredients, only make your plan for every week.</p>
                <div class="mb-5">
                    <a href="../examples/" class="btn btn-primary btn-lg px-4">Make Your Plan Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
