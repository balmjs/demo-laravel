@extends('mpa.layout')

@section('title', 'About Page')

@section('style')
    <link rel="stylesheet" href="{{ balm('css/about.css') }}">
@endsection

@section('content')
    <p>This is my about content.</p>
@endsection

@section('script')
    <script src="{{ balm('js/about.js') }}"></script>
@endsection
