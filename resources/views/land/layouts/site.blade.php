<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset(env('THEME')) }}/ico/favicon.ico">

    <title>NYC - Design Studio</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset(env('THEME')) }}/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset(env('THEME')) }}/css/style.css" rel="stylesheet">
    <link href="{{ asset(env('THEME')) }}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset(env('THEME')) }}/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="{{ asset(env('THEME')) }}/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu">

<!-- Menu -->
@yield('content')

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/classie.js"></script>
<script src="{{ asset(env('THEME')) }}/js/bootstrap.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/smoothscroll.js"></script>
<script src="{{ asset(env('THEME')) }}/js/jquery.stellar.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/fancybox/jquery.fancybox.js"></script>
<script src="{{ asset(env('THEME')) }}/js/main.js"></script>
<script>
    $(function(){
        $.stellar({
            horizontalScrolling: false,
            verticalOffset: 40
        });
    });
</script>

<script type="text/javascript">
    $(function() {
        //    fancybox
        jQuery(".fancybox").fancybox();
    });
</script>

</body>
</html>
