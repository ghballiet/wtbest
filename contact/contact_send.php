<?php require_once('../include/php/database.php'); ?>
<?php $link=db_connect();?>

<?php?	if (isset ($_REQUEST['email'])) //email address was submitted
	{
			$email = $_REQUEST['email'];
			$message = $_REQUEST['message'];
			$first_name = $_REQUEST['first_name'];
			$last_name = $_REQUEST['last_name'];
	
		mail("admin@wtbest.com","WTBest Contact Form from $first_name $last_name",$message,"From: $email");
	)
	else //email not filled in
	{
		echo "Invalid Email Submitted";
	}
?>