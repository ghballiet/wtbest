<?php $SECRET_KEY="9RatrE9ded9he8"; ?>
<?php if(isset($_COOKIE[$SECRET_KEY])) { header('Location: admin_home/'); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
    <head>
        <title>West Texas BEST | Administrator Login</title>
        <link rel="stylesheet" href="../include/css/reset.css" type="text/css" />
        <link rel="stylesheet" href="../include/css/master.css" type="text/css" />
        <link rel="stylesheet" href="admin.css" type="text/css" />
    </head>
    <body>
        <div id="login_form">
            <h1>Please log in to continue.</h1>
            <form method="post" action="login/" >
                <table>
                    <tr><th>Email</th><td><input type="text" id="email" name="email" /></td></tr>
                    <tr><th>Password</th><td><input type="password" id="password" name="password" /></td></tr>
                    <tr><td colspan="2"><input type="submit" value="Log In" /></td><td></td></tr>
                </table>
            </form>
        </div>
        <script type="text/javascript">
        username.focus();
        </script>
    </body>
</html>
