<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Code Education - Laravel Express - IAMJ</title>
    <!-- CSS -->
    <link href="{{ asset('/assets/css/blog.plugins.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/assets/css/blog.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Navigation -->
@yield('navbar')


<!-- Page Header -->
@yield('header')

<!-- Main Content -->
<div class="container">
    <div class="row">
        @yield('content')
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="fa-stack fa-lg">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                        </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </div>
</footer>

<!-- JS -->
<script src="{{ asset('/assets/js/blog.plugins.min.js') }}" type="application/javascript"></script>
<script src="{{ asset('/assets/js/blog.min.js') }}" type="application/javascript"></script>

</body>

</html>
