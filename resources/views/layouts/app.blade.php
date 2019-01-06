<!DOCTYPE html>
<html lang="en">

<head>
    <title>:: C&S Carsale ::</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet" type="text/css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/light-gallery.css" rel="stylesheet">
    <link href="css/elegant-icons.css" rel="stylesheet">
    @yield('custom-css')

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/select2.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/pointer-events.js"></script>

    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/jquery.superslides.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.caroufredsel.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/material-parallax.js"></script>
    <script src="js/owl-carousel.js"></script>

    <script src="js/rd-mailform.js"></script>
    <script src="js/rd-navbar.js"></script>
    <script src="js/rd-instafeed.js"></script>
    <script src="js/light-gallery.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/waypoint.js"></script>
    <script src="js/scripts.js"></script>
    <!--[if lt IE 9]>   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
</head>

<body class="front" data-spy="scroll" data-target="#top1" data-offset="96">
    <div id="main">
        @include('inc.header')
        @yield('content')
        @include('inc.footer')
    </div>

</body>

</html>
