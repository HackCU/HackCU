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

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="B7TSFPJCW9RES">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

    </section>

    <?php include('footer.php'); ?>

    <?php include('includes.php'); ?>
</body>


</html>
