<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Master Blade</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body class="antialiased test">

@php
    $testVariable = 'test';
@endphp

@yield('content')

<x-insertableHeader></x-insertableHeader>

<div id="app">
    <test>
        <p>Slot test</p>
    </test>
</div>

<x-testcomponent :test="$testVariable"></x-testcomponent>

<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>


</body>

</html>
