<?php $_POST['title'] = 'Home'; ?>
<?php $_POST['callout_title'] = 'Welcome to West Texas Best.'; ?>
<?php $_POST['callout_text'] = 'BEST is a non-profit, volunteer-based organization whose mission is to inspire students to pursue careers in engineering, science, and technology through participation in a sports-like, science and engineering-based robotics competition.';?>
<?php $_POST['custom_css'] = array('../include/css/nivo-slider.css','home.css'); ?>
<?php $_POST['custom_js'] = array('../include/js/jquery.nivo.slider.pack.js'); ?>
<?php require('../master/header.php'); ?>

                    <!-- content starts here -->
                    <!-- image slideshow -->
                    <div id="slider">
                        <?php
                        $q = "select p.id, p.caption from photos p;";
                        $list = db_query($q);
                        foreach($list as $l) {?>
    <img src="photo.php?i=<?php echo $l[id]; ?>" title="<?php echo $l[caption]; ?>" alt="" />
                        <?php    
                        }
                        ?>
</div>
                    <!-- mailing list signup -->
                    <div id="signup">
                        <h2>Sign Up for our Mailing List</h2>
                        <form method="POST" action="signup/index.php">
                            <table>
                                <tr><th>First Name</th><th>Last Name</th></tr>
                                <tr>
                                    <td><input type="text" name="first_name" id="first_name" /></td>
                                    <td><input type="text" name="last_name" id="last_name" /></td>
                                </tr>
                                <tr><th>Email Address</th></tr>
                                <tr>
                                    <td colspan="2"><input type="text" name="email" id="email" /></td>
                                </tr>
                                <!--<tr><th>Confirm Email Address</th></tr>
                                <tr>
                                    <td colspan="2'"><input type="text" name="email_confirm" id="email_confirm" /></td>
                                </tr> -->
                                <tr><th>Organization or School Name</th></tr>
                                <tr>
                                    <td colspan="2"><input type="text" name="org_name" id="org_name" /></td>
                                </tr>
                            </table>
							<table>
                                <tr><th>Type of Organization</th><th>ZIP Code</th><th></th></tr>
                                <tr>
                                    <td>
                                        <select id="org_type" name="org_type">
                                            <option value=""></option>
                                            <?php
                                            $q = "select * from org_type o order by o.name;";
                                            $list = db_query($q);
                                            foreach($list as $l) {
                                            ?>
                                            <option value="<?php echo $l[id]; ?>"><?php echo $l[name]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td> <style="padding-right: 0px" ><input type="text" name="zip" id="zip" maxlength="5" /></style></td>
                                    <td> <style="text-align: right;padding-right: 0px" ><input type="submit" value="Sign Up" /></style></td>
                                </tr>
                            </table>
                        </form>
                    </div>
					
					<p>        <br><br>       
					</p>
					<p>       <br><br>
					</p>
					<p>   BEST is a non-profit, volunteer-based organization whose mission is to inspire students to pursue careers in engineering, science, and technology through participation in a sports-like, science and engineering-based robotics competition.                                                                                                                                                                                                                                                                                                                                                                                         
					</p>
					<p>        <br><br>       
					</p>
					<p>       <br><br>
					</p>
                
                    <script type="text/javascript">
                    $(window).load(function() {
                       $('#slider').nivoSlider({
                           effect:'fade',
                           beforeChange: function() {
                             $('.nivo-caption').fadeOut('slow');
                           },
                           afterChange: function() {
                             $('.nivo-caption').fadeIn('slow');
                           },
                           captionOpacity:1,
                           pauseTime:5000,
                       });
                    });
                    </script>
                    <!-- end of content -->

<?php require('../master/footer.php'); ?>