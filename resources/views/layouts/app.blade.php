<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Article Site @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Jon Doe"/>
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show
        <link href="{{ ('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/site.css') }}" rel="stylesheet">
        
        <link href="{{ asset('css/site(2).css') }}" rel="stylesheet">
        
        
        <script src="{{ asset('js/jquery-2.1.4.js.js') }}"></script>
        <script src="{{ asset('js/site.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ ('bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ ('https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js') }}"></script>
    @yield('styles')
    <link rel="shortcut icon" href="{!! asset('assets/site/ico/favicon.ico')  !!} ">
</head>
<body>
@include('partials.header')
<!--
@include('partials.nav')

<div class="container">
@yield('content')
</div>
@include('partials.footer')
-->
<!-- Scripts -->
@yield('scripts')

</body>
</html>




