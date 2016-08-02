<!doctype html>
<html lang="en-US">
    <?php include('head.php'); ?>

    <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
        <div class="body">
            <?php include('header.php'); ?>

            <section id="text-carousel-intro-section" class="" data-stellar-background-ratio="0.5"
                     style="background-image: url(img/maincover2b.png); background-size: cover; background-repeat: no-repeat;background-attachment: fixed;
                     -webkit-background-size: cover;">
                <div class="container" >
                        <div id="form-main">
                            <div id="form-div">
                                <form class="form" id="form1">

                                    <p class="name">
                                        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                                    </p>

                                    <p class="email">
                                        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                                    </p>

                                    <p class="text">
                                        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"></textarea>
                                    </p>


                                    <div class="submit">
                                        <input type="submit" value="SEND" id="button-blue"/>
                                        <div class="ease"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>

            <?php include('footer.php'); ?>

            <?php include('includes.php'); ?>
    </body>


</html>
