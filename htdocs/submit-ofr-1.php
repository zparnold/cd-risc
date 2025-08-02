<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CD-RISC: Obtain CD-RISC</title>

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
<body class="background-light twlsky-green twlsky-mixedcolours isolated-sections loader-bar">

    <!-- Page Outer Container -->
    <div class="outer-container clearfix">

        <?php require('nav.php');?>

        <!-- =========== Page Body Inside Content =========== -->
        <div class="inside-body-content-container clearfix">

            <!-- =========== Section 1: Top Banner =========== -->
            <div id="top-banner" class="container-fluid horizontal-section-container clearfix">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/temp/banner-4.jpg" alt="Landscape, wind turbines" class="full-width-image">
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
                            <li><a href="#">Obtain CD-RISC</a></li>
                            <li class="active"><a href="#">Submit Online Form</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- End: Section: Breadcrumbs -->
            <!-- =========== Section 2 =========== -->
            <div class="container-fluid horizontal-section-container clearfix">
                <div class="row">

                    <div class="col-sm-3">

                        <!-- Sidebar Menu -->
                        <div id="sidebar-menu" class="section-container sm-extra-top-padding clearfix">

                            <a href="#" class="section-header">
                                <h5 class="text">Obtain CD-RISC</h5>
                            </a><!-- .section-header -->

                            <div class="section-content clearfix">

                                <ul class="sidebar-menu">
                                    <li class="menu-item active"><a href="submit-ofr.php">Submit Online Form</a></li>
                                </ul><!-- .sidebar-menu -->

                            </div><!-- .section-content -->

                        </div><!-- .section-container -->
                        <!-- End: Sidebar Menu -->

                    </div><!-- .col-sm-3 -->

                    <div class="col-sm-9">
                        <!-- Main Page Content -->
                        <div id="main-page-content" class="section-container main-page-content clearfix">

                            <div class="section-content clearfix">

                                <h1 class="page_title">Submit Online Request Form</h1>

                                <h4>In order to obtain the scale, please complete and submit the project information form. On the basis of this information we will send an agreement which describes terms of use and payment details. Once this has been completed, the scale and user's manual will be promptly forwarded. </h4>
                                <form class="form-horizontal" name="frm" action="/cd-risc/requestform.php" method="post" onsubmit="return validate(frm)">
<fieldset>

<!-- Form Name -->
<legend>Request for CD-RISC</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name of Principal Investigator/Project Director/Clinician</label>  
  <div class="col-md-8">
  <input id="rf_name" name="rf_name" type="text" placeholder="Full Name" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="org">Department/Organization</label>  
  <div class="col-md-8">
  <input id="rf_dept" name="rf_dept" type="text" placeholder="Organization" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Street Address</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="rf_address" name="rf_address"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City, State/Province Zip/Postal Code</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="rf_citystatezip" name="rf_citystatezip"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>  
  <div class="col-md-8">
  <input id="rf_country" name="rf_country" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telephone">Telephone Number</label>  
  <div class="col-md-8">
  <input id="rf_telephone" name="rf_telephone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fax">Fax Number</label>  
  <div class="col-md-8">
  <input id="rf_fax" name="rf_fax" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-8">
  <input id="rf_email" name="rf_email" type="email" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="orgType">1.	Organization Type: Select the category that best describes the type or primary purpose of your organization.</label>
  <div class="col-md-8">
    <select id="rf_purpose" name="orgType" class="form-control">
      <option value="">Please Select an Organization Type</option>
      <option value="Medical Group">Medical Group</option>
      <option value="Hospital">Hospital</option>
      <option value="Academic Center">Academic Center</option>
      <option value="Private Foundation">Private Foundation</option>
      <option value="Insurance Company/Health Plan">Insurance Company/Health Plan</option>
      <option value="Government Agency">Government Agency</option>
      <option value="Consulting Firm">Consulting Firm</option>
      <option value="Pharmaceutical Company">Pharmaceutical Company</option>
      <option value="Other">Other</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="otherOrg">**If you selected Organization Type "Other", Please Explain:</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="rf_pupose_explain" name="rf_pupose_explain"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="project">2.	Please briefly describe the project in which you plan to use the CD-RISC:</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="rf_project_description" name="rf_project_description"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="subjects">3.	Number of subjects in sample</label>  
  <div class="col-md-8">
  <input id="rf_sample_size" name="rf_sample_size" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="numTimes">4.	Number of times the CD-RISC will be administered to each subject:</label>  
  <div class="col-md-8">
  <input id="rf_times_administered" name="rf_times_administered" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="duration">5.	Project duration:</label>  
  <div class="col-md-8">
    <select id="rf_project_duration" name="rf_project_duration" class="form-control input-md">
        <option>Please choose an option</option>
        <option>Less than 1 year</option>
        <option>1 year</option>
        <option>2 years</option>
        <option>3 years</option>
        <option>4 years</option>
        <option>5 years</option>
        <option>More than 5 years</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="assessment">6.	Method of assessment (e.g., mail survey, internet):</label>  
  <div class="col-md-8">
  <input id="rf_assessment_method" name="rf_assessment_method" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="duration">7. Please indicate if you prefer the RISC-2, RISC-10, RISC-25. Please note: For some translations, we do not have all three versions of the RISC.</label>
        <div class="col-md-8">
            <select id="rf_risc_type_selection" name="rf_risc_type_selection" class="form-control input-md">
                <option>Please choose an option</option>
                <option>RISC-2</option>
                <option>RISC-10</option>
                <option>RISC-25</option>
            </select>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="duration">8.	Please indicate if you are a student:</label>
        <div class="col-md-8">
            <select id="rf_student_indication" name="rf_student_indication" class="form-control input-md">
                <option>Please choose an option</option>
                <option>No</option>
                <option>Yes</option>
            </select>
        </div>
    </div>
<div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>

</fieldset>
</form>


                            </div><!-- .section-content -->

                        </div><!-- .section-container -->
                        <!-- End: Main Page Content -->
                    </div><!-- .col-sm-9 -->

                </div><!-- .row -->
            </div><!-- .container-fluid -->
            <!-- End: Section 2 -->
        </div><!-- .inside-body-content-container -->
        <!-- End: Page Body Inside Content -->

    </div><!-- .outer-container -->
    <!-- End: Page Outer Container -->
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
        document.getElementById("obtain-cd-risc").className += " current-menu-ancestor";
    </script>
	<script language="javascript">
	function validate(frm) {
		var msg = "Please complete the following fields:\n";
		var badFields = "";
		
				if (frm.rf_name.value.length == 0) {
					badFields = badFields + "  - Name of Principle Investigator...Clinition\n";
				}
  			if (frm.rf_dept.value.length == 0) {
					badFields = badFields + "  - Department/Organization \n";
				}
 				if (frm.rf_address.value.length == 0) {
					badFields = badFields + "  - Street Address \n";
				}
				if (frm.rf_citystatezip.value.length == 0) {
					badFields = badFields + "  - City State Zip \n";
				}
				if (frm.rf_country.value.length == 0) {
					badFields = badFields + "  - Country \n";
				}
				if (frm.rf_telephone.value.length == 0) {
					badFields = badFields + "  - Telephone \n";
				}
				if (frm.rf_email.value.length == 0) {
					badFields = badFields + "  - Email \n";
				}
				if (frm.rf_purpose.value.length == 0) {
					badFields = badFields + "  - Organization Type \n";
				} else {
					if (frm.rf_purpose.value == "Other") {
					   if (frm.rf_purpose_explain.value.length == 0) {
						    badFields = badFields + "  - Other Organization Explaination \n";
						 }
					}
			  }

				if (frm.rf_project_description.value.length == 0) {
					badFields = badFields + "  - Project Description \n";
				}
				if (frm.rf_sample_size.value.length == 0) {
					badFields = badFields + "  - Sample Size \n";
				}
				if (frm.rf_times_administered.value.length == 0) {
					badFields = badFields + "  - Times Administered \n";
				}
				if (frm.rf_project_duration.value.length == 0) {
					badFields = badFields + "  - Project Duration \n";
				}
				if (frm.rf_assessment_method.value.length == 0) {
					badFields = badFields + "  - Assessment method \n";
				}
        if (frm.rf_risc_type_selection.value.length == 0) {
            badFields = badFields + "  - RISC Assement type choice \n";
        }
        if (frm.rf_student_indication.value.length == 0) {
            badFields = badFields + "  - Student requested \n";
        }

		if (badFields.length != 0) {
			alert(msg + badFields);
			return false;
		}

		if (frm.rf_email.value.length > 0) {
			if (emailCheck(frm.rf_email.value)) {
		     if (frm.rf_sirname.value.length == 0) {
				    frm.rf_sirname.value = "y";
		     }
         return true;
			}
			else {
			   return false;
			}
		} else {
			return true;
		}
	}

	function emailCheck(emailStr) {
		var emailPat=/^(.+)@(.+)$/;
		var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]";
		var validChars="\[^\\s" + specialChars + "\]";
		var quotedUser="(\"[^\"]*\")";
		var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
		var atom=validChars + '+';
		var word="(" + atom + "|" + quotedUser + ")";
		var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
		var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
		var matchArray=emailStr.match(emailPat);

		
		if (matchArray==null) {
			alert("Email address seems incorrect (check @ and .'s)");
			return false;
		}

		var user=matchArray[1];
		var domain=matchArray[2];

		if (user.match(userPat)==null) {
    			alert("The username doesn't seem to be valid.");
			return false;
		}

		var IPArray=domain.match(ipDomainPat);
		if (IPArray!=null) {
	  		for (var i=1;i<=4;i++) {
			    if (IPArray[i]>255) {
		        	alert("Destination IP address is invalid!");
				return false;
	 	   		}
    			}
    			return true;
		}

		var domainArray=domain.match(domainPat);
		if (domainArray==null) {
			alert("The domain name doesn't seem to be valid.");
    			return false;
		}

		var atomPat=new RegExp(atom,"g");
		var domArr=domain.match(atomPat);
		var len=domArr.length;
		if (domArr[domArr.length-1].length<2 || domArr[domArr.length-1].length>3) {
		   alert("The address must end in a three-letter domain, or two letter country.");
   			return false;
		}

		if (len<2) {
   			var errStr="This address is missing a hostname!";
			alert(errStr);
   		return false;
		}
 		return true;
	}
</script>
</body>
</html>