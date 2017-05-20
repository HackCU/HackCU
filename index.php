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
	<?php include('sections/navbar.php'); ?>
</nav>

<header>


    <!--            <div class="keyart" id="nonparallax">-->
    <div id="hero" ng-controller="HeaderCtrl">
        <div class="row info-row">
            <div class="col-md-12 container info-container">
                <div class="header-content" style="z-index: 100;">
                    <div class="header-content-inner text-center">

                        <h1>HackCU Episode III</h1>
                        <p class="smallMar">University of Colorado Boulder</p>
                        <p>April 22<sup>nd</sup> to April 23<sup>rd</sup> 2017</p>

                    </div>
                </div>

            </div>

<!--            Shows nonparallax image-->
<!--            <div class="layer layer-07"></div>-->

            <div class="layer layer-01" data-type="parallax" data-depth="0.10"></div>
            <div class="layer layer-02" data-type="parallax" data-depth="0.20"></div>
            <div class="layer layer-03" data-type="parallax" data-depth="0.40"></div>
            <div class="layer layer-04" data-type="parallax" data-depth="0.55"></div>
            <div class="layer layer-05" data-type="parallax" data-depth="0.68"></div>
            <div class="layer layer-06" data-type="parallax" data-depth="1.00"></div>
<!--            <div class="layer layer-06 " data-type="parallax" data-depth="1.00"></div>-->
        </div>
    </div>
</header>



<section id="about" class="text-center about">
    <?php include('sections/about.html'); ?>
</section>

<!--section id="apply" class="cta"-->
    <!--?php //include('sections/apply.html'); ?-->
<!--/section-->

<section id="goals" class="faq">
    <?php include('sections/goals.html'); ?>
</section>

<!--section id="schedule" class="text-center"-->
    <!--?php //include('sections/schedule.html'); ?-->
<!--/section-->


<section id="faq" class="faq">
    <?php include('sections/faq.html'); ?>
</section>

<section id="location" class="text-center">
    <?php include('sections/location.html'); ?>
</section>
<!--section id="volunteer" class="text-center"-->
    <!--?php //include('sections/volunteer.html'); ?-->
<!--/section-->

<section id="sponsors" class="text-center">
    <?php include('sections/sponsors.html'); ?>
</section>

<section id="judges" class="text-center">
    <?php include('sections/judges.html'); ?>
</section>

<section id="team" class="text-center">
    <?php include('sections/team.html'); ?>
</section>

<section id="contact" class="contact">
    <?php include('sections/contact.html'); ?>
</section>

<footer>
    <?php include('sections/footer.php'); ?>
</footer>

<script>

    window.addEventListener('scroll', function () {
        var depth, i, layer, layers, len, movement, topDistance, translate3d;
        topDistance = this.pageYOffset;
        layers = document.querySelectorAll("[data-type='parallax']");

        for (i = 0, len = layers.length; i < len; i++) {
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
