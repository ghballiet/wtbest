<?php

require_once('../../include/database.php');
$link=db_connect();

	if (isset ($_REQUEST['org_type'])) //email address was submitted
	{
		$org_type = $_REQUEST['org_type'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		$mail_list = mysql_query("SELECT email FROM mailing_list WHERE org_type=$org_type");
		mail($mail_list,$subject,$message,"From: donotreply@wtbest.org");
	)
	else //email not filled in
	{
		echo "Invalid Email Submitted";
	}
db_disconnect($link); 
?>