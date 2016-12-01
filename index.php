<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HackCU 2017</title>

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
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#schedule">Schedule</a>
                </li>
                <li>
                    <a class="page-scroll" href="#apply">Apply</a>
                </li>
                <li>
                    <a class="page-scroll" href="#faq">FAQ</a>
                </li>
<!--                <li>-->
<!--                    <a class="page-scroll" href="#location">Location</a>-->
<!--                </li>-->
                <li>
                    <a class="page-scroll" href="#sponsors">Sponsors</a>
                </li>
                <li>
                    <a class="page-scroll" href="#team">Team</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
                <!--
                    <li>
                    <a id="mlh-trust-badge" style="display:block;max-width:100px;min-width:60px;position:fixed;width:10%;z-index:10000;" href="https://mlh.io/seasons/na-2017/events?utm_source=na-2017&utm_medium=TrustBadge&utm_campaign=na-2017&utm_content=white" target="_blank"><img src="https://s3.amazonaws.com/logged-assets/trust-badge/2017/white.svg" alt="Major League Hacking 2017 Hackathon Season" style="width:100%"></a>
                    </li>
                -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->

        <a id="mlh-trust-badge"
           style="display:block;max-width:100px;min-width:60px;position:fixed;width:10%;z-index:10000;"
           href="https://mlh.io/seasons/na-2017/events?utm_source=na-2017&utm_medium=TrustBadge&utm_campaign=na-2017&utm_content=white"
           target="_blank"><img src="https://s3.amazonaws.com/logged-assets/trust-badge/2017/white.svg"
                                alt="Major League Hacking 2017 Hackathon Season" style="width:100%"></a>
    </div>
    <!-- /.container-fluid -->
</nav>

<header>


<!--            <div class="keyart" id="nonparallax">-->
    <div id="hero" ng-controller="HeaderCtrl">
        <div class="row">
            <div class="col-xs-12 container">
                <div class="header-content" style="z-index: 100;">
                    <div class="header-content-inner text-center">

                        <h1>HackCU Episode III</h1>
                        <p class="smallMar">University of Colorado Boulder</p>
                        <p>April 8<sup>th</sup> to April 9<sup>th</sup> 2017</p>
                        <a href="#about" class="btn btn-outline btn-xl page-scroll">Learn More</a>

                    </div>


                </div>

            </div>
            <div class="layer layer-07"></div>
            <div class="layer layer-01" data-type="parallax" data-depth="0.10"></div>
            <div class="layer layer-02" data-type="parallax" data-depth="0.20"></div>
            <div class="layer layer-03" data-type="parallax" data-depth="0.40"></div>
            <div class="layer layer-04" data-type="parallax" data-depth="0.55"></div>
            <div class="layer layer-05" data-type="parallax" data-depth="0.68"></div>
            <div class="layer layer-06" data-type="parallax" data-depth="0.80"></div>
            <div class="layer layer-06 layer01" data-type="parallax" data-depth="1.00"></div>
        </div>


    </div>
    <!--        </div>-->

<!--    <div id="hero">-->

<!--    </div>-->

</header>

<section id="about" class="text-center about">
    <?php include('sections/about.html'); ?>
</section>

<section id="apply" class="">
    <?php include('sections/apply.html'); ?>
</section>

<section id="event" class="text-center">
    <?php include('sections/event.html'); ?>
</section>

<section id="schedule" class="text-center">
    <?php include('sections/schedule.html'); ?>
</section>


<section id="faq" class="faq">
    <?php include('sections/faq.html'); ?>
</section>

<!--<section id="location" class="text-center">-->
<!--	  --><?php //include('sections/location.html'); ?>
<!--</section>-->

<section id="sponsors" class="text-center">
    <?php include('sections/sponsors.html'); ?>
</section>

<section id="team" class="text-center">
    <?php include('sections/team.html'); ?>
</section>

<section id="contact" class="contact">
    <?php include('sections/contact.html'); ?>
</section>

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
//    window.addEventListener('scroll', function (event) {
//        var layers, topDistance;
//        topDistance = this.pageYOffset;
//        layers = document.querySelectorAll("[data-type='parallax']");
//
//        var depth, i, layer, len, movement, translate3d;
//
//        for (i = 0, len = layers.length; i < len; i++) {
//            console.log("in");
//            layer = layers[i];
//            depth = layer.getAttribute('data - depth’);
//            movement = -(topDistance * depth);
//            translate3d = 'translate3d(0, ' + movement + 'px, 0)';
//            layer.style['-webkit-transform'] = translate3d;
//            layer.style['-moz-transform'] = translate3d;
//            layer.style['-ms-transform'] = translate3d;
//            layer.style['-o-transform'] = translate3d;
//            layer.style.transform = translate3d;
//        }
//        return layers = document.querySelectorAll("[data-type='parallax']");
//    });

</script>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>

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

</body>

</html>
