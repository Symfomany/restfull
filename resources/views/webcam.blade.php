
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Jumbotron Template for Materialize</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


</head>

<body>


{{--<div class="navbar-fixed">--}}
    {{--<nav>--}}
        {{--<div class="nav-wrapper">--}}
            {{--<a href="#!" class="brand-logo">Logo</a>--}}
            {{--<ul class="right hide-on-med-and-down">--}}
                {{--<li><a href="sass.html"><i class="material-icons">search</i></a></li>--}}
                {{--<li><a href="badges.html"><i class="material-icons">view_module</i></a></li>--}}
                {{--<li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>--}}
                {{--<li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</nav>--}}
{{--</div>--}}

<div class="container">

    <!-- Receiver -->
    <img src="" id="receiver">

    <!-- Optional sender -->
    <video autoplay="true" id="client"></video>
        <canvas id="preview"></canvas>

        <!-- Log output -->
        <div id="log"></div>

</div>
<script src="https://cdn.socket.io/socket.io-1.3.7.js"></script>
{{--<script src="{{ asset('js/socket.io/socket.io.min.js') }}"></script>--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script>
    $(document).ready(function() {

        var socket = io(window.location.hostname + ':3001');

        var c_width = 500;
        var c_height = 350;
        // Setup elements
        var receiver = document.getElementById('receiver');
        var canvas = document.getElementById('preview');
        var ctx = canvas.getContext('2d');
        var video = document.getElementById('client');
        // Set the display region dimensions
        receiver.style.height = c_height;
        receiver.style.width = c_width;
        canvas.width = c_width;
        canvas.height = c_height;
        // Socket connection

//        log('Ready to go');
        function log(message) {
            // Log messages can be emitted to the server for debugging
            //socket.emit('info', message);
//            $('#log').append(message);
//            console.log(message);
        }
        /**
         * Display incoming data
         */
        socket.on('update', function(data) {
            receiver.src = data;
//            console.log('receive data user!!!');
            log('Received data');
        });



//        navigator.getUserMedia = ( navigator.getUserMedia ||
//        navigator.webkitGetUserMedia ||
//        navigator.mozGetUserMedia ||
//        navigator.msGetUserMedia);








        navigator.getUserMedia = ( navigator.getUserMedia ||
        navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia ||
        navigator.msGetUserMedia);

        if (navigator.getUserMedia) {
            navigator.getUserMedia (

                    // constraints
                    {
                        video: true,
                        audio: true
                    },

                    // successCallback
                    function(localMediaStream) {
                        var video = document.querySelector('video');
                        video.src = window.URL.createObjectURL(localMediaStream);

                        // Do something with the video here, e.g. video.play()
                    },

                    // errorCallback
                    function(err) {
                        console.log("The following error occured: " + err);
                    }
            );

            function draw(v, ctx, w, h) {
                ctx.drawImage(v, 0, 0, w, h);
                socket.emit('data', canvas.toDataURL("image/png"));
                setTimeout(function() { draw(v, ctx, w, h); }, 50);
            }
            draw(video, ctx, c_width, c_height);
        } else {
//            console.log("getUserMedia not supported");
        }




    });
</script>

</body>

</html>