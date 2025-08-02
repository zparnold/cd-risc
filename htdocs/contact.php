<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CD-RISC: Contact</title>
    <!-- favicon -->
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
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
<body class="background-light twlsky-orange twlsky-mixedcolours isolated-sections loader-bar">
    <!-- Page Outer Container -->
    <div class="outer-container clearfix">
        <!-- Header -->
		<?php require('nav.php')?>
        <!-- End: Header -->
        <!-- =========== Page Body Inside Content =========== -->
        <div class="inside-body-content-container clearfix">
            <!-- =========== Section 1: Top Banner =========== -->
            <div id="top-banner" class="container-fluid horizontal-section-container clearfix">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/temp/banner-7.jpg" alt="Sunset" class="full-width-image">
                    </div><!-- .col-xs-12 -->
                </div><!-- .row -->
            </div>
            <!-- End: Section 1: Top Banner -->
            <!-- =========== Section: Breadcrumbs =========== -->
            <div id="breadcrumbs-container" class="container-fluid horizontal-section-container hidden-xs clearfix">
                <div class="row">
                    <div class="col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="#">Contact</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- End: Section: Breadcrumbs -->
            <!-- =========== Section 2 =========== -->
            <div class="container-fluid horizontal-section-container clearfix">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Main Page Content -->
                        <div id="main-page-content" class="section-container main-page-content clearfix">
                            <div class="section-content clearfix">
                                <h1 class="page_title">Contact + Obtain the Scale</h1>
                                <!-- contact content -->
                                <div class="row clearfix">
                                    <!-- contact details -->
                                    <div class="col-sm-6">

                                        <!-- Contact Details -->
                                        <h6>If you'd like to get in contact with us or obtain the CD-RISC scale for your usage, the quickest way to do so is to fill out the form to the bottom right.</h6>
                                        <h6>If you are making a request for the scale, after submitting this form we will contact you with more information.</h6>
                                    </div><!-- .col-sm-6 -->
                                    <!-- contact form -->
                                    <div class="col-sm-6">
                                        <div id="contact-form-container" class="clearfix">
                                           <form action="https://formspree.io/mail@cd-risc.com" role="form" class="validate-form clearfix" method="POST" id="contact-form">
												<div class="form-group">
                                                    <label for="form-name">Name</label>
                                                    <input type="text" class="form-control validate-field required" data-validation-type="string" id="form-name" name="name" placeholder="Enter name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-email">Email address</label>
                                                    <input type="email" class="form-control validate-field required" data-validation-type="email" id="form-email" name="email" placeholder="Enter email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-contact-number">Contact Phone Number</label>
                                                    <input type="tel" class="form-control validate-field" data-validation-type="phone" id="form-contact-number" name="contact_number" placeholder="Enter a number we can contact you if necessary">
                                                </div>
                                                <div class="form-group">
                                                    <label for="form-contact-message">Message</label>
                                                    <textarea class="form-control message-textarea-height large validate-field required" id="form-contact-message" name="message" placeholder="Enter message"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-outline-inverse btn-lg" id="mail-submit">Submit</button>
                                                <i class="form-loader fa fa-spinner fa-spin"></i>
                                                <div class="form-group form-general-error-container"></div>
                                                <div style="display: none;" id="success">
                                                	<h4>Form Submitted Successfully</h4>
                                                </div>
											</form>
                                        </div><!-- #contact-form-container -->
                                    </div><!-- .col-sm-6 -->
                                </div>
                                <!-- end: contact content -->
                            </div><!-- .section-content -->
                        </div><!-- .section-container -->
                        <!-- End: Main Page Content -->
                    </div><!-- .col-sm-12 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
            <!-- End: Section 2 -->
            
            
    <!-- go to top -->
    <div id="go-to-top" onclick="scroll_to_top(this.event);" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></div>
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
        document.getElementById("contact").className += " current-menu-ancestor";
    </script>
    <script>
			$( "#contact-form" ).submit(function( event ) {
  				$("mail-submit").innerHTML("<i class=\"fa fa-check\"></i>")
				$("#success").show();
				});
			</script>
</body>
</html>