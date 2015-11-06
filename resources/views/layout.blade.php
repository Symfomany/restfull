<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('fonts/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:700,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery.nouislider.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <title>Ou me loger?</title>

</head>

<body id="page-top" class="has-map">

<div id="page-wrapper">

    @include('Partial._header')

    @yield('content')



</div>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.color-2.1.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.average-color.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/infobox.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/richmarker-compiled.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/markerclusterer.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/icheck.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.nouislider.all.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.inview.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>



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