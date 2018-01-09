
@extends('layouts.app')

@section('title','PS Harmony & Beauty ')
@section('header')
    @include('header.header')
@endsection
@section('slider')
@include('slider.slider')
@endsection  

@section('content')
@include('about.about')
@include('testimony.testimony')
@include('book-service.book-service')
{{-- @include('welcome.welcome')

@include('book-service.partials.book-service') --}}

@endsection
