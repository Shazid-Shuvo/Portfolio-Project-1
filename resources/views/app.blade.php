<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet"href="{{asset('css/bootstrap.css')}}">
     <title>Laravel</title>
    <script src="{{asset('js/axios.min.js')}}"></script>
</head>
<body>
@include('components.navbar')
@include('components.loader')
<div class="" id="content-div">
    @yield('content')
</div>
@include('components.footer')
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
