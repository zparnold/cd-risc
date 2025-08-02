<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CD-RISC: Home</title>
    <link rel="icon" type="image/png" href="images/temp/favicon.png">
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/lightbox/css/lightbox.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="css/style-theme.css" rel="stylesheet">
    <!-- <link href="css/style-theme.min.css" rel="stylesheet"> -->
    <link href="css/style-colours.css" rel="stylesheet">
    <!-- <link href="css/style-colours.min.css" rel="stylesheet"> -->
    <link href="css/style-mixedcolours.css" rel="stylesheet">
    <!-- <link href="css/style-mixedcolours.min.css" rel="stylesheet"> -->
    <!-- loader -->
    <link href="css/loader.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>
    <!-- Custom Theme CSS -->
    <link href="css/styles.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159396644-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-159396644-1');
    </script>
</head>
<body class="background-light twlsky-red twlsky-mixedcolours isolated-sections loader-bar">
<!-- Page Outer Container -->
<div class="outer-container clearfix">
    <?php require('nav.php'); ?>
    <!-- =========== Page Body Inside Content =========== -->
    <div class="inside-body-content-container clearfix">
        <!-- =========== Section 1: Carousel =========== -->
        <div id="top-banner" class="container-fluid carousel-container horizontal-section-container clearfix">
            <div class="row">
                <div class="col-xs-12">
                    <div id="top-banner-carousel" class="owl-carousel owl-theme full-page-image-slider">
                        <div class="item">
                            <div class="text bottom-full-width">
                                <a href="about.php"><h2>The Connor-Davidson Resilience Scale &copy;</h2></a>
                                <div class="clearfix"></div>
                                <a href="about.php"><h5>More than a decade of comprehensive research</h5></a>
                            </div>
                            <a href="about.php"><img class="lazyOwl" data-src="images/temp/carousel-img7.jpg" src="#"
                                                     alt="Wheat harvest"></a>
                        </div>
                        <div class="item">
                            <div class="text bottom-full-width">
                                <a href="user-guide.php"><h2>April 2020 Update</h2></a>
                                <div class="clearfix"></div>
                                <a href="user-guide.php"><h5>Find out what's new with CD-RISC&copy; in the most recent
                                        update</h5></a>
                            </div>
                            <a href="user-guide.php"><img class="lazyOwl" data-src="images/temp/carousel-img4.jpg"
                                                          src="#" alt="Highway"></a>
                        </div>
                    </div><!-- #top-banner-carousel -->
                    <!-- banner navigation arrows - comment to disable -->
                    <div class="slider-nav slider-nav-left"><i class="fa fa-angle-left"></i></div>
                    <div class="slider-nav slider-nav-right"><i class="fa fa-angle-right"></i></div>
                </div><!-- .col-xs-12 -->
            </div><!-- .row -->
        </div><!-- #top-banner -->
        <!-- End: Section 1: Carousel -->
        <!-- =========== Section 2 =========== -->
        <div class="container-fluid horizontal-section-container clearfix">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Website Intro Paragraph -->
                    <div id="home-intro-paragraph" class="section-container featured-text clearfix">
                        <h2>Welcome to our site. We're glad you stopped by.</h2>
                        <p>This website is home to the Connor-Davidson Resilience Scale&copy;. Please use the links in
                            the menu above to find out more about the assesment, and how you can obtain a copy.</p>
                    </div><!-- .section-container -->
                    <!-- End: Website Intro Paragraph -->
                </div><!-- .col-sm-12 -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
        <!-- End: Section 2 -->

    </div><!-- .inside-body-content-container -->
    <!-- End: Page Body Inside Content -->
</div><!-- .outer-container -->
<!-- End: Page Outer Container -->
<!-- Beneath Footer -->
<div id="beneath-footer" class="center-container clearfix">
</div><!-- #beneath-footer -->
<!-- go to top -->
<div id="go-to-top" onclick="scroll_to_top(this.event);" title="Go to top"><span
            class="glyphicon glyphicon-chevron-up"></span></div>
<!-- Jquery and Bootstrap JS -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Easing - for transitions and effects -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Plugins -->
<script src="js/detectmobilebrowser.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/lightbox/js/lightbox.min.js"></script>
<script src="plugins/masonry/masonry.pkgd.min.js"></script>
<!-- Custom functions for this theme -->
<script src="js/functions.js"></script>
<!-- <script src="js/functions-min.js"></script> -->
<script src="js/initialise-functions.js"></script>
<script>
    document.getElementById("home").className += " current-menu-ancestor";
</script>
</body>
</html>