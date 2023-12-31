<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="Template/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Template/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="Template/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="Template/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="Template/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="Template/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="Template/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="Template/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="Template/css/style.css" type="text/css">
</head>

<body>
    @include('header')
	<div class="rev-slider">
	@yield('content')   	
	</div> <!-- .container -->
    @include('footer')

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>