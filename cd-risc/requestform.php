<?php

$field_name = stripslashes($_POST['rf_name']);
$field_sirname = stripslashes($_POST['rf_sirname']);
$field_dept = stripslashes($_POST['rf_dept']);
$field_companyname = stripslashes($_POST['rf_companyname']);
$field_address = stripslashes($_POST['rf_address']);
$field_citystatezip = stripslashes($_POST['rf_citystatezip']);
$field_country = stripslashes($_POST['rf_country']);
$field_telephone = stripslashes($_POST['rf_telephone']);
$field_cellphone = stripslashes($_POST['rf_cellphone']);
$field_fax = stripslashes($_POST['rf_fax']);
$field_email = $_POST['rf_email'];
$field_purpose = stripslashes($_POST['rf_purpose']);
$field_purpose_explain = stripslashes($_POST['rf_purpose_explain']);
$field_project_description = stripslashes($_POST['rf_project_description']);
$field_sample_size = stripslashes($_POST['rf_sample_size']);
$field_times_administered = stripslashes($_POST['rf_times_administered']);
$field_project_duration = stripslashes($_POST['rf_project_duration']);
$field_assessment_method = stripslashes($_POST['rf_assessment_method']);

$mail_to = 'mail@cd-risc.com';
$subject = 'Request Form from: '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'Department: '.$field_dept."\n";
$body_message .= 'Address: '.$field_address."\n";
$body_message .= 'City State Zip: '.$field_citystatezip."\n";
$body_message .= 'Country '.$field_country."\n";
$body_message .= 'Telephone: '.$field_telephone."\n";
$body_message .= 'Fax: '.$field_fax."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Purpose: '.$field_purpose."\n";
$body_message .= 'Purpose Explanation: '.$field_purpose_explain."\n";
$body_message .= 'Project Description: '.$field_project_description."\n";
$body_message .= 'Sample Size: '.$field_sample_size."\n";
$body_message .= 'Number of Times Administered: '.$field_times_administered."\n";
$body_message .= 'Project Duration: '.$field_project_duration."\n";
$body_message .= 'Assessment Method: '.$field_assessment_method."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$spamcheck = false;
if ($field_sirname != "y") {
	 $spamcheck = true;
/*
?>
	<script language="javascript" type="text/javascript">
		alert('bad sirname');
		window.location = 'requestform-test.shtml';
	</script>
<?php
*/
}
elseif ($field_companyname != "")  { 
	 $spamcheck = true;
/*
?>
	<script language="javascript" type="text/javascript">
		alert('bad company name');
		window.location = 'requestform-test.shtml';
	</script>
<?php
*/
}
elseif ($field_cellphone != "none")  {
	 $spamcheck = true;
/*
?>
	<script language="javascript" type="text/javascript">
		alert('bad cellphone');
		window.location = 'requestform-test.shtml';
	</script>
<?php
*/

}

/*
else { 
?>
	<script language="javascript" type="text/javascript">
		alert('test fields are okay');
		window.location = 'requestform-test.shtml';
	</script>
<?php
}
*/

if ($spamcheck == true) {
	 $body_message .= 'Sirname: '.$field_sirname."\n";
	 $body_message .= 'Companyname: '.$field_companyname."\n";
	 $body_message .= 'Cellphone: '.$field_cellphone."\n";
	 $subject = '***Spam Request Form from: '.$field_name;
	 $mail_to = 'mail@cd-risc.com';
}


$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { 
?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = '/index.shtml';
	</script>
<?php
}
else { 
?>
	<script language="javascript" type="text/javascript">
		alert('Message failed.');
		window.location = '/index.shtml';
	</script>
<?php
}

?>