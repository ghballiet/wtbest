<?php require_once('../include/database.php'); ?>
<?php $link=db_connect();?>

<?php
	if (isset ($_REQUEST['org_type'])) //email address was submitted
	{
		$org_type = $_REQUEST['org_type'];
		$subject = $_REQUEST['subject'];
		$message = $_REQUEST['message'];
		$person_id = $_REQUEST['name'];
		$list1 = "SELECT email FROM mailing_list m WHERE m.org_type=$org_type";
		$mail_list1 = db_query($list1);
		foreach($mail_list1 as $l) { 
			mail($l[email],$subject,$message,"From: donotreply@wtbest.org");
       
        }

		$list2 = "SELECT email FROM mailing_list m WHERE m.id=$person_id";
		$mail_list2 = db_query($list1);
		foreach($mail_list2 as $l) {
			mail($l[email],$subject,$message,"From: donotreply@wtbest.org");

        }
	}
	else //email not filled in
	{
		echo "Invalid Email Submitted";
	}
db_disconnect($link); 
?>