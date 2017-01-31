<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HackCU Travel</title>

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

<body id="page-top" ng-app="hackcu2017" style="background-color: #220B0D;">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <?php include('sections/navbar.php'); ?>
</nav>


<div class="container text-center largeMar travelContainer" id="travel">
    <div class="row travelQuestion">
        <div class="col-md-6 col-md-offset-3 col-sm-12" style="margin-top: 10em;">
            <h1>HackCU 2017 Travel</h1>
            <p class="smallMar">How do you get to HackCU?</p>
        </div>
    </div>
    <!--                        <p class="smallMar">April 8<sup>th</sup> to April 9<sup>th</sup> 2017</p>-->
    <!--                        <p>University of Colorado Boulder</p>-->

    <div class="row largeMar">
        <div class="col-lg-4">
            <h2>Location and Parking</h2>
            <p>The main event will be located in the Wolf Law building at:</p>
            <b>2450 Kittredge Loop Dr.
                <br>Boulder, CO 80305</b></p>
            <p>Parking will be available in the parking lot outside of Wolf Law on Kittredge Loop Dr. Be sure to follow
                directions on the signs to make sure you are not in permit only parking.</p>
        </div>

        <div class="col-lg-4">
            <h2>Coming From the Airport</h2>
            <p>There is a bus, the RTD AB line, that runs from the airport to our university campus. Find the bus schedule and fares <a href="http://www3.rtd-denver.com/schedules/getSchedule.action?routeId=AB" target="_blank">here</a>. Get off at the Baseline and
                Broadway stop, and follow the route from the bus stop to the Wolf Law building just 4 minutes away.</p>
            <img src="images/map.png" style="width: 60%;"/><br><br>
            <p>If you take an Uber or Lyft from DIA (Denver International Airport), save your receipt to be used for
                your travel reimbursement if you were approved.</p>

        </div>

        <div class="col-lg-4">
            <h2>Grant Amounts</h2>
            <p>If you are traveling farther than 25 miles from the University of Colorado Boulder, you are eligible for
                travel reimbursement. To receive reimbursement, you must:</p>
            <ol>
                <li>RSVP to the link via email.</li>
                <li>Be approved by the HackCU admin team for reimbursement. You will receive an email.</li>
                <li>Provide receipts to the travel reimbursement form provided.</li>
                <li>Submit a project to Devpost at the end of the hackathon.</li>
            </ol>
        </div>
    </div>


    <div class="row largeMar">
        <div class="col-lg-4">
            <h2>Flights</h2>
            <p>We will be offering flight reimbursements on a first come first serve basis with the amount reimbursed
                affected by distance traveled. Once approved by our admin team via email, you will
                be required to submit travel receipts on our travel reimbursement form. Your entire flight
                may or may not be covered by reimbursements.</p>

        </div>
        <div class="col-lg-4">
            <h2>International Travel</h2>
            <p>We love international participants! Unfortunately, HackCU cannot provide assistance for international
                travel or visa paperwork. However, if you do make
                it to HackCU, send us an email at contact[at]hackcu.org with the subject line: "International
                Participant" and we can put in a request for reimbursement.</p>
        </div>
        <div class="col-lg-4">
            <h2>Questions?</h2>
            <p>Have any questions that were not answered here? Feel free to contact us <a href="contact.html">here</a>
                or email us at contact@hackcu.org.</p>
        </div>
    </div>
</div>


<footer>
    <?php include('sections/footer.php'); ?>
</footer>

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


</body>

</html>
