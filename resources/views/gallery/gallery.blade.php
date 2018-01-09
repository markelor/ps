
@extends('layouts.app')

@section('title','Galeria')
@section('header')
    @include('header.header')
@endsection


@section('content')
    @include('gallery.partials.gallery')
@endsection