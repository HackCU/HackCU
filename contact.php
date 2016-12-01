<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="HackCU III is the 3rd annual hackathon at the University of Colorado Boulder">
    <meta name="author" content="HackCU">

    <title>Contact HackCU</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/simple-line-icons/css/simple-line-icons.css">

    <!-- Theme & Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/new-age.css" rel="stylesheet">


</head>

<body id="page-top" ng-app="hackcu2017">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">HackCU 2017</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="index.php/#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php/#schedule">Schedule</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php/#apply">Apply</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php/#faq">FAQ</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php/#location">Location</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php/#sponsors">Sponsors</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php/#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.php/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>

    <div id="para" ng-controller="HeaderCtrl">
        <div class="row">
            <div class="col-xs-12 container">
                <div class="header-content" style="z-index: 100;">
                    <div class="header-content-inner text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <center><div id="form_sample"></div></center>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>


    </div>

</header>


<footer>
    <div class="container">

        <p>Made with <i class="fa fa-heart"></i> by HackCU</p>
        <div class="row">
            <div class="col-lg-4">
                <ul>
                    <li>
                        <a href="#">Apply</a>
                    </li>
                    <li>
                        <a href="https://static.mlh.io/docs/mlh-code-of-conduct.pdf">MLH Code</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <ul>
                    <li>
                        <a href="https://hackcu.org/">Local Hack Day</a>
                    </li>
                    <li>
                        <a href="https://startups2students.hackcu.org/">Startup2Students</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script>
    //Parallax script
    window.addEventListener('scroll', function() {
        var depth, i, layer, layers, len, movement, topDistance, translate3d;
        topDistance = this.pageYOffset;
        layers = document.querySelectorAll("[data-type='parallax']");

        for (i = 0, len = layers.length; i < len; i++) {
            console.log(i);
            layer = layers[i];
            depth = layer.getAttribute('data-depth');
            movement = -(topDistance * depth);
            translate3d = 'translate3d(0, ' + movement + 'px, 0)';
            layer.style['-webkit-transform'] = translate3d;
            layer.style['-moz-transform'] = translate3d;
            layer.style['-ms-transform'] = translate3d;
            layer.style['-o-transform'] = translate3d;
            layer.style.transform = translate3d;
        }
    });

</script>
<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Angular Core JavaScript -->
<script src="bower_components/angular/angular.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/new-age.js"></script>

<!-- Angular App JS -->
<script src="js/app.js"></script>

<!-- External JS -->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/form.js"></script>

</body>

</html>
