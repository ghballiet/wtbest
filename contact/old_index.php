<?php $_POST['title'] = 'Contact'; ?>
<?php $_POST['callout_title'] = 'Drop us a line.'; ?>
<?php $_POST['callout_text'] = '';?>
<?php $_POST['custom_css'] = array('contact.css'); ?>
<?php require('../master/header.php'); ?>

                    <!-- content starts here -->
                    <form id="contact" method="post" action="contact_send.php">
                        <table>
                            <tr><th>First Name</th><th>Last Name</th></tr>
                            <tr><td><input type="text" name="first_name" id="first_name" /></td><td><input type="text" name="last_name" id="last_name" /></td></tr>
                        </table>
                        <table>
                            <tr><th>Email Address</th></tr>
                            <tr><td><input type="text" name="email" id="email" /></td></tr>
                            <tr><th>Message</th></tr>
                            <tr><td><textarea name="message" id="message" /></textarea></td></tr>
                            <tr><td><input type="submit" value="Send" /></td></tr>
                        </table>
                    </form>
                    <!-- end of content -->

<?php require('../master/footer.php'); ?>