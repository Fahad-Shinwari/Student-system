<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo asset('css/app.css')?>" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/casio.css') }}">


        <title>{{config('app.name','LSAPP')}}</title>
    </head>
    @include('inc/navbar')
    <div class="container">
        @include('inc/messages')
        @yield('content')
    </div>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
</html>
