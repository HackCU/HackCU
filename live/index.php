<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HackCU Live</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bower_components/simple-line-icons/css/simple-line-icons.css">

    <!-- Theme & Custom CSS -->
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/new-age.css" rel="stylesheet">

    <!-- Angular Core JavaScript -->
    <script src="../bower_components/angular/angular.min.js"></script>
    <!-- ngRoute -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular-route.min.js"></script>

    <!-- Google Maps -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBF59zIMAxSx94ze66lke-r4KJFngmJKn0" type="text/javascript"></script>

    </script>
</head>

<body id="page-top" ng-app="hackculive" style="background-color: #FAAE17;">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" id="brand-text" href="#" style="text-indent:0px"><i class="fa fa-circle" style="color:red;"></i> LIVE - HackCU 2017</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#schedule">Schedule</a>
                </li>
                <li>
                    <a href="#apply">Talks</a>
                </li>
                <li>
                    <a href="#map">Map</a>
                </li>
                <li>
                    <a href="#sponsors">Sponsors & API </a>
                </li>
                <li>
                    <a href="/travel.php">Travel</a>
                </li>
                <li>
                    <a href="#hardware">Hardware</a>
                </li>
                <li>
                    <a href="#prizes">Prizes</a>
                </li>
                <li>
                    <a href="#faq">FAQ</a>
                </li>
                <li>
                    <a href="#rules">Rules</a>
                </li>
                <li>
                    <a href="/#page-top">Main Site <i class="fa fa-external-link"></i></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->


    </div>
    <!-- /.container-fluid -->
</nav>



<section>
    <?php include('sections/countdown.html'); ?>
</section>

<!-- content section - angular view -->
<section style="padding:0 0">
    <div class="container">
        <ng-view></ng-view>
</div>
</section>

<!-- <footer>
    <?php include('sections/footer.php'); ?>
</footer> -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="../js/new-age.js"></script>

<!-- Angular App JS -->
<script src="./live/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-moment/1.0.1/angular-moment.min.js"></script>

<!-- External JS -->
<script src="../js/waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>

</body>

</html>
