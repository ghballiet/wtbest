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
                        <form>
                            <table>
                                <tr><th>First Name</th><th>Last Name</th></tr>
                                <tr>
                                    <td><input type="text" name="first_name" id="first_name" /></td>
                                    <td><input type="text" name="last_name" id="last_name" /></td>
                                </tr>
                                <tr><th>Email Address</th></tr>
                                <tr>
                                    <td colspan="2'"><input type="text" name="email" id="email" /></td>
                                </tr>
                                <tr><th>Confirm Email Address</th></tr>
                                <tr>
                                    <td colspan="2'"><input type="text" name="email_confirm" id="email_confirm" /></td>
                                </tr>
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
                                    <td style="padding-right: 0px"><input type="text" name="org_zip" id="org_zip" maxlength="5" /></td>
                                    <td style="text-align: right;padding-right: 0px"><input type="submit" value="Sign Up" /></td>
                                </tr>
                            </table>
                        </form>
                    </div>

                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>

                    <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

                    <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>

                    <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc iaculis mi in ante. Vivamus imperdiet nibh feugiat est.</p>

                    <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum imperdiet. Quisque fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque adipiscing eros ut libero. Ut condimentum mi vel tellus. Suspendisse laoreet. Fusce ut est sed dolor gravida convallis. Morbi vitae ante. Vivamus ultrices luctus nunc. Suspendisse et dolor. Etiam dignissim. Proin malesuada adipiscing lacus. Donec metus. Curabitur gravida.</p>
                    
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