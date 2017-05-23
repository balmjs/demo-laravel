@extends('mpa.layout')

@section('title', 'Contact Page')

@section('style')
    <link rel="stylesheet" href="{{ balm('css/contact.css') }}">
@endsection

@section('content')
    <p>This is my contact content.</p>
@endsection

@section('script')
    <script src="{{ balm('js/contact.js') }}"></script>
@endsection
