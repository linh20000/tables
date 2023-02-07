@extends('master')

@section('content')
   <main id="main">
    @include('frontend.home.banner')
    @include('frontend.home.slogan')
    @include('frontend.home.product')
    @include('frontend.home.new')
    @include('frontend.home.feedback')
    @include('frontend.home.form_email_register')
    @include('frontend.home.policy')
   </main>
@endsection