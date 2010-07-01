<?php require_once('../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
	if (isset($_POST['org_type']) or isset($_POST['name'])) //email address was submitted
	{
		$org_type = $_POST['org_type'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$person_id = $_POST['name'];
		
		if($org_type != NULL) {
    		$org_type_str = "'";
    		foreach($org_type as $o) {
    		    $org_type_str = $org_type_str . $o . "', '";
    		}
		
    		$org_type_str = substr($org_type_str,0,-3);
    		$list1 = "SELECT email FROM mailing_list m WHERE m.org_type IN (" . $org_type_str . ");";
            $mail_list1 = db_query($list1);
            foreach($mail_list1 as $l) {
                echo "Mailing: " . $l[email];
                if(mail($l[email],$subject,$message,'From: donotreply@wtbest.org\r\nX-Mailer:php')) {
                    echo " Success!<br/>";
                } else {
                    echo " Failure!<br/>";
                }
            }
	    }
	    
	    if($person_id != NULL) {
            $nstr = "'";
            foreach($person_id as $p) {
                $nstr = $nstr . $p . "', '";
            }
            $nstr = substr($nstr,0,-3);
            $list2 = "SELECT m.email FROM mailing_list m WHERE m.id IN (" . $nstr . ");";
            $mail_list2 = db_query($list1);
            foreach($mail_list2 as $l) {
                echo "Mailing: " . $l[email];
                if(mail($l[email],$subject,$message,"From: donotreply@wtbest.org")) {
                    echo " Success 2!<br/>";
                } else {
                    echo " Failure 2!<br/>";
                }
            }
        }
	} else //email not filled in
	{
		echo "Invalid Email Submitted";
	}
db_disconnect($link); 
?>