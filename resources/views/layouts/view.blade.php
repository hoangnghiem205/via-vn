<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>VIA Vietnam - Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">

    <!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">


    <link rel="stylesheet" href="{{ asset("/css/slick/slick.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/slick/slick-theme.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/iconfont.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/font-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("/css/bootsnav.css") }}">

    <!-- xsslider slider css -->
    <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->
    <!--For Plugins external css-->
    <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

    <!--Theme custom css -->
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}">
    <!--<link rel="stylesheet" href="assets/css/colors/maron.css") }}">-->

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ asset("/css/responsive.css") }}"/>

    <script src="{{ asset("/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js") }}"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">
<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
<!--End off Preloader -->


<div class="culmn">
    <!--Home page style-->
    @include('layouts/nav')

    @yield('content')

    @include('layouts/footer')

</div>

<!-- JS includes -->

<script src="{{ asset("/js/vendor/jquery-1.11.2.min.js") }}"></script>
<script src="{{ asset("/js/vendor/bootstrap.min.js") }}"></script>

{{--<script src="{{ asset("/js/owl.carousel.min.js") }}"></script>--}}
<script src="{{ asset("/js/jquery.magnific-popup.js") }}"></script>
<script src="{{ asset("/js/jquery.easing.1.3.js") }}"></script>
<script src="{{ asset("/css/slick/slick.js") }}"></script>
<script src="{{ asset("/css/slick/slick.min.js") }}"></script>
<script src="{{ asset("/js/jquery.collapse.js") }}"></script>
<script src="{{ asset("/js/bootsnav.js") }}"></script>


<script src="{{ asset("/js/plugins.js") }}"></script>
<script src="{{ asset("/js/main.js") }}"></script>

<script>
    $(document).ready(function() {
        $('#btnChangeLang').click(function(evt) {
            var token = $("input[name=_token").val();
            var locale = $("input[name=locale").val();
            $.post( "/language",{locale: locale, _token: token}, function(data) {
                window.location.reload(true);
            });
        });
    })
</script>
</body>

</html>