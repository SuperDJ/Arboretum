<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/vuetify/dist/vuetify.min.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/print.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <meta name="theme-color" content="#1976d2">
        <meta name="msapplication-navbutton-color" content="#1976d2">
        <meta name="apple-mobile-web-app-status-bar-style" content="#1976d2">
        <link rel="manifest" href="/manifest.json">

        <title>Laravel</title>
    </head>

    <body>
        <div id="app"></div>
{{--
        <script>
			var google_api = '{{ config( 'app.GOOGLE_API' ) }}';
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{ config( 'app.GOOGLE_API' ) }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/map-icons@3.0.3/dist/js/map-icons.min.js"></script>
        <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>--}}
        <script src="{{ asset( '/js/main.js' ) }}"></script>
        <script src="https://marslan390.github.io/BeautifyMarker/leaflet-beautify-marker-icon.js"></script>
        {{--<script src="/service-worker.js"></script>--}}
    </body>
</html>