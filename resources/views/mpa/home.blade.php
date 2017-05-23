@extends('mpa.layout')

@section('title', 'Home Page')

@section('style')
    <link rel="stylesheet" href="{{ balm('css/home.css') }}">
@endsection

@section('content')
    <p>This is my home content.</p>
@endsection

@section('script')
    <script src="{{ balm('js/home.js') }}"></script>
@endsection
