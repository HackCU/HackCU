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
    <link href="/live/style.css" rel="stylesheet">

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
                    <a href="#hardware">Hardware</a>
                </li>
                <li>
                    <a href="#sponsors">Sponsors</a>
                </li>
                <li>
                    <a href="/travel.php">Travel</a>
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
                    <h3><b>General Info</b></h3>
                    <p><b>Slack: <a href="http://slack.hackcu.org/" target="_blank">slack.hackcu.org</a></b><br>Join our Slack to talk with other hackers and keep up to date with announcements.</p><br>
                    <p><b>Devpost: <a href="https://hackcu3.devpost.com" target="_blank">hackcu3.devpost.com</a></b><br>Register for HackCU on Devpost, and submit your hack here on Sunday by 12 noon (submit early, you can edit your submission!)</p><br>
                    <p><b>Mentor: <a href="https://mentors.hackcu.org" target="_blank">mentors.hackcu.org</a></b><br>Request one of our mentors using our ticketing system.</p><br>
                    <p><b>HackCU Hackers: <a href="https://www.facebook.com/groups/hackcu/" target="_blank">facebook.com/groups/hackcu</a></b><br>Join our Facebook Community :)</p><br>
                    <p><b>Social Media:</b><br>Show us what you are hacking on social media using <b><a href="https://twitter.com/search?src=typd&q=%23hackcu" target="_blank">#hackcu</a></b>. We will be retweeting you on <b><a href="https://twitter.com/HackCU" target="_blank">Twitter</a></b>, and reposting our favourite posts on <b><a href="https://www.instagram.com/hackcu/" target="_blank">Instagram</a></b>!</p><br>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" style="height: 100%">
                <div class="jumbotron" style="height: 100%">
                    <h2><b><i class="fa fa-wifi" aria-hidden="true"></i></b></h2>
                    <p><b>Network:</b> UCB Guest</p>
                    <p class="smallp">
                        Open your browser and go to <a href="https://cuwireless.int.colorado.edu/">cuwireless.int.colorado.edu</a>, to accept the usage agreement.
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-4" style="height: 100%">
                <div class="jumbotron" style="height: 100%">
                    <h2><b>#hackcu</b></h2>
                    <p>
                        Get <a href="https://twitter.com/search?src=typd&q=%23hackcu" target="_blank">#hackcu</a> trending!
                    </p>
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
<!-- MAP  -->
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron" style="background-color:#53190C; color: white;" id="map">
                    <h1>Map</h1>
                    <br>
                    <div id="real-map" style="height: 500px; width: 100%"></div>
                </div>
            </div>
        </div>

<!-- HARDWARE  -->
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron" id="hardware">
                    <h1><a href='https://hardware.mlh.io/events/hackcu-iii' target='_blank'>Hardware Lab</a></h1>
                    <p>You can find MLH Hardware Lab on 3rd floor at Wolf Law. Head to <a href='https://hardware.mlh.io/events/hackcu-iii' target='_blank'>MLH Hardware Lab website</a> to request hardware to borrow before you arrive at the desk. Here's the items available/existing:</p>
                    <div class="row" ng-show="loaded4">
                        <div class="col col-md-6" ng-repeat="item in hardware1">
                            <p>{{item.item_name}} <span class="badge">{{item.available}} / {{item.quantity}}</span></p>
                        </div>
                        <div class="col col-md-6" ng-repeat="item in hardware2">
                            <p>{{item.item_name}} <span class="badge">{{item.available}} / {{item.quantity}}</span></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!-- SPONSORS  -->
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron" id="sponsors">
                    <h1>Sponsors & APIs</h1>
                    <div class="row" ng-show="loaded3">
                        <div class="col col-xs-12" ng-repeat="sponsor in sponsors">
                            <h3 ng-show="sponsor.link"><b><a href={{sponsor.link}}>{{sponsor.company}}</a></b></h3>
                            <h3 ng-hide="sponsor.link"><b>{{sponsor.company}}</b></h3>
                            <p class="sponsorinfo">
                                {{sponsor.info}}
                            </p>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!-- PRizes-->
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron">
                    <h1>Prizes</h1>
                    <p>Check out our <a href="https://hackcu3.devpost.com">Devpost</a> for the most up to date prizes</p>
                </div>
            </div>
        </div>


<!-- RULES - keep at bottom -->
        <div class="row">
            <div class="col-xs-12">
                <div class="jumbotron" id="rules">
                    <h1>Rules</h1>
                    <p>
                        These rules are based on the standard competition rules used at MLH Member Hackathons.
                        If you have a suggestion for these rules or a question about them, please submit an issue <a href="https://github.com/MLH/hackathon-rules/issues">here</a>.
                    </p>
                    <br>
                    <h2>The spirit of the competition</h2>
                    <p>
                        Remember that hackathons are like marathons. Some people go to compete but most people
                        take part to better themselves and have fun. Whatever the reason is you're at a hackathon,
                        make sure you're upholding the <a href="https://medium.com/tfogo/the-spirit-of-hackathons-a0d81a65060a#.6cx5ac9t8">hacker spirit</a> by collaborating with other teams, helping
                        beginners, and having fun.
                    </p>
                    <br>
                    <h2>The rules of the competition</h2>
                    <p>
                    <ol>
                        <li>
                            The maximum number of hackers per team is limited to 4. As a participant, you should make sure to check how many prizes are available per team. There is usually a limited number of prizes for each challenge. So if you form a large team and win a challenge, there might not be enough prizes for everyone on your team.
                        </li>
                        <li>
                            Teams should be made up exclusively of students (or recent graduates within one year of having graduated) who are not organizers, volunteers, judges, sponsors, or in any other privileged position at the event.
                        </li>
                        <li>
                            All team members should be present at the event. Leaving the venue for some time to hack elsewhere is fine.
                        </li>
                        <li>
                            Teams can of course gain advice and support from organizers, volunteers, sponsors, and others.
                        </li>
                        <li>
                            All work on a project should be done at the hackathon.
                        </li>
                        <li>
                            Teams can use an idea they had before the event.
                        </li>
                        <li>
                            Teams can work on ideas that have already been done. Hacks do not have to be “innovative”. If somebody wants to work on a common idea they should be allowed to do so and should be judged on the quality of their hack. These days it’s hard to find something that’s fully original and teams might not know an idea has been done before anyway.
                        </li>
                        <li>
                            Teams can work on an idea that they have worked on before (as long as they do not re-use code).
                        </li>
                        <li>
                            Teams can use libraries, frameworks, or open-source code in their projects. Working on a project before the event and open-sourcing it for the sole purpose of using the code during the event is against the spirit of the rules and is not allowed.
                        </li>
                        <li>
                            Adding new features to existing projects is allowed. Judges will only consider new functionality introduced or new features added during the hackathon in determining the winners.
                        </li>
                        <li>
                            Teams must stop hacking once the time is up. However, teams are allowed to debug and make small fixes to their programs after time is up. e.g. If during demoing your hack you find a bug that breaks your application and the fix is only a few lines of code, it's okay to fix that. Making large changes or adding new features is not allowed.
                        </li>
                        <li>
                            Projects that violate the <a href="https://static.mlh.io/docs/mlh-code-of-conduct.pdf">Code of Conduct</a> are not allowed.
                        </li>
                        <li>
                            Teams can be disqualified from the competition at the organizers' discretion. Reasons might include but are not limited to breaking the Competition Rules, breaking the <a href="https://static.mlh.io/docs/mlh-code-of-conduct.pdf">Code of Conduct</a>, or other unsporting behaviour.</li>
                        </li>
                    </ol>
                    </p>
                    <br>
                    <h2>Demos</h2>
                    <p>
                        After hacking finishes, teams will show their projects each other and to the judges.
                    </p>
                    <p>
                        You are strongly encouraged to present a demo of what you have built. Pitches or presentations are discouraged. You are not judged on the quality of your pitch or the quality of your idea. As you are judged on what you built, you'll only hurt yourself by not showing a demo.
                    </p>
                    <p>
                        You are encouraged to present what you have done even if your hack is broken or you weren’t able to finish. It's okay if you didn't finish your hack—that happens all the time! Completion is only one part of the judging criteria, so you might still do well. Also, demoing is not just about the competition. It's a chance to share with others what you learned and what you tried to build—that's what hacking's all about! For being courageous enough to demo, you'll receive a special MLH "I Demoed" sticker—it doesn't matter how good the demo is! In the case that you don't have anything to demo, you can give a presentation about what you tried and what you learned. Hearing what other people learned is interesting and inspiring for other attendees.
                    </p>
                    <br>
                    <h2>Judging Criteria</h2>
                    <p>
                        Teams will be judged on these four criteria. Judges will weigh the criteria equally. During judging, participants should try to describe what they did for each criterion in their project.
                    </p>
                    <ul>
                        <li>
                            <b>Technology:</b> How technically impressive was the hack? Was the technical problem the team tackled difficult? Did it use a particularly clever technique or did it use many different components? Did the technology involved make you go "Wow"?
                        </li>
                        <li>
                            <b>Design:</b> Did the team put thought into the user experience? How well designed is the interface? For a website, this might be about how beautiful the CSS or graphics are. For a hardware project, it might be more about how good the human-computer interaction is (e.g. is it easy to use or does it use a cool interface?).
                        </li>
                        <li>
                            <b>Completion:</b> Does the hack work? Did the team achieve everything they wanted?
                        </li>
                        <li>
                            <b>Learning:</b> Did the team stretch themselves? Did they try to learn something new? What kind of projects have they worked on before? If a team which always does virtual reality projects decides to switch up and try doing a mobile app instead, that exploration should be rewarded.
                        </li>
                    </ul>
                    <p>
                        These criteria will guide judges but ultimately judges are free to make decisions based on their gut feeling of which projects are the most impressive and most deserving.
                    </p>
                    <p>
                        It's important to note that these judging criteria do not include:
                    </p>
                    <ul>
                        <li>
                            How good your code is. It doesn't matter if your code is messy, or not well commented, or uses inefficient algorithms. Hacking is about playing around, making mistakes, and learning new things. If your code isn't production ready, we're not going to mark you down.
                        </li>
                        <li>
                            How well you pitch. Hacking is about building and learning, not about selling.
                        </li>
                        <li>
                            How good the idea is. Again, hackathons aren't about coming up with innovative ideas. It's about building and learning.
                        </li>
                        <li>
                            How well the project solves a problem. You can build something totally useless and as long as you're learning and having fun, that's a good hack! Sometimes a pointless project is one of the best hacks!
                        </li>
                    </ul>
                    <p>
                        So don't worry about coming up with the next big idea or building the next Facebook. You'll have plenty of time for that outside the hackathon. just focus on learning, having fun, and making new friends. At the end of the day the skills you learn and the friends you make might lead to the next big thing—but you don't have to do that to win a hackathon.
                    </p>
                    <br>
                    <h2>Remember!</h2>
                    <p>
                        The competition is just a part of the hackathon. To make the most out of the event, try something new, teach other people, and make new friends!
                    </p>
                    <p>
                        Happy Hacking from the <a href="https://hackcu.org/#team">HackCU Team</a>!
                    </p>
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
<!-- <script src="/live/app.js"></script> -->
<script src="https://hackcu.org/live/app.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-moment/1.0.1/angular-moment.min.js"></script>

<!-- External JS -->
<script src="../js/waypoints.min.js"></script>
<script src="../js/jquery.counterup.min.js"></script>

</body>

</html>
