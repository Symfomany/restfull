<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

{{--    <link href="{{ asset('fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">--}}
    <link href='http://fonts.googleapis.com/css?family=Roboto:700,400,300' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css">

    <title>Ou me loger?</title>

</head>

<body id="page-top" class="has-map">

<div id="page-wrapper">

    @include('Partial._header')

    @yield('content')



</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/all.js') }}"></script>


<!--[if lte IE 9]>
<script type="text/javascript" src="{{ asset('js/ie-scripts.js') }}"></script>
<![endif]-->

<script>
    var _latitude = 51.541216;
    var _longitude = -0.095678;
    var jsonPath = '{{ asset('json/items.json') }}';

    // Load JSON data and create Google Maps

    $.getJSON(jsonPath)
            .done(function(json) {
                console.log(jsonPath);
                createHomepageGoogleMap(_latitude,_longitude,json);
            })
            .fail(function( jqxhr, textStatus, error ) {
                console.log(error);
            })
    ;
</script>

</body>
</html>