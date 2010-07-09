<?php require_once('../include/php/database.php'); ?>
<?php $link=db_connect();?>

<?php	if (isset ($_POST['email'])) //email address was submitted
	{
			$email = $_POST['email'];
			$message = $_POST['message'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
	
		if(	mail("jennkini@gmail.com","WTBest Contact Form from $first_name $last_name",$message,"From: $email")) {
			db_disconnect($link);
			header('Location: ../?msg=Message successful.');  }
		else {
            db_disconnect($link); 
			header('Location: ../?msg=Message Failed.'); 
        }
	}
	else //email not filled in
	{
		db_disconnect($link); 
		header('Location: ../?msg=Email address not entered.');
	}
?>