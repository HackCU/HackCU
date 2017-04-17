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
                    <a href="#map">Map</a>
                </li>
                <li>
                    <a href="#sponsors">Sponsors & API </a>
                </li>
                <li>
                    <a href="/travel.php">Travel</a>
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
    <div class="container" ng-controller="MainCtrl">
        <div class="row">
            <div class="col-xs-12 col-md-8" style="height: 100%">
                <div class="jumbotron" style="height: 100%">
                    <h1>Welcome to HackCU!</h1>
                    <h3>General Info</h3>
                    <p><b>Slack: <a href="https://hackcu.slack.com/" target="_blank">hackcu.slack.com</a></b></p>
                    <p><b>Devpost: <a href="https://hackcu2017.devpost.com" target="_blank">hackcu2017.devpost.com</a></b></p>


                </div>
            </div>
            <div class="col-xs-12 col-md-4" style="height: 100%">
                <div class="jumbotron" style="height: 100%">
                    <h2><b><i class="fa fa-wifi" aria-hidden="true"></i></b></h2>
                    <p>Network: </p>
                    <p>Password: </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" style="height: 100%">
                <div class="jumbotron" style="height: 100%">
                    <h2><b>#hackcu</b></h2>
                    <h3><b><i class="fa fa-twitter" aria-hidden="true"></i> <a href="https://twitter.com/HackCU" target="_blank">@hackcu</a></b></h3>
                    <h3><b><i class="fa fa-instagram" aria-hidden="true"></i> <a href="https://www.instagram.com/hackcu/" target="_blank">@hackcu</a></b></h3>
                    <h3><b><i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="https://www.facebook.com/HackCU/" target="_blank">/hackcu</a></b></h3>
                </div>
            </div>
        </div>

        <div class="jumbotron" id="schedule">
            <h1>Event Schedule</h1>
            <h3>Subject to change</h3>
            <div class="row" ng-show="loaded1 && loaded2">
              <!-- Day 1 -->
              <div class="col-xs-12 col-md-12">
                <h2>Saturday, April 22nd</h2>
                <br>
                <span ng-repeat="(key, val) in day1entries">
                    <div class="col-xs-4 col-md-2">
                        <p style="text-align: right">{{key}}</p>
                    </div>
                    <div class="col-xs-8 col-md-10">
                        <span ng-repeat="event in val.events">
                            <div class="col-xs-12 col-md-6">
                                <p style="text-align: left"><b>{{event.description}}</b></p>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <p style="text-align: left">{{event.category}}</p>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <p style="text-align: left">{{event.location}}</p>
                            </div>
                        </span>
                    </div>
                </span>
              </div>
              <br>
              <!-- Day 2 -->
              <div class=" col-xs-12 col-md-12">
                <h2>Sunday, April 23rd</h2>
                <br>
                <span ng-repeat="(key, val) in day2entries">
                    <div class="col-xs-4 col-md-2">
                        <p style="text-align: right">{{key}}</p>
                    </div>
                    <div class="col-xs-8 col-md-10">
                        <span ng-repeat="event in val.events">
                            <div class="col-xs-12 col-md-6">
                                <p style="text-align: left"><b>{{event.description}}</b></p>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <p style="text-align: left">{{event.category}}</p>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <p style="text-align: left">{{event.location}}</p>
                            </div>
                        </span>
                    </div>
                </span>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron" style="background-color:#53190C; color: white;" id="map">
                    <h1>Map</h1>
                    <br>
                    <div id="real-map" style="height: 500px; width: 100%"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="jumbotron">
                    <h1>Hardware</h1>
                    <p>... hardware list here</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="jumbotron">
                    <h1>Prizes</h1>
                    <p>... prize list here</p>
                </div>
            </div>
        </div>
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
