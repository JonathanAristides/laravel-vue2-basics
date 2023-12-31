<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Blade</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>

<x-insertableHeader></x-insertableHeader>

<div id="blog-app">
    <Blog></Blog>
</div>


<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
