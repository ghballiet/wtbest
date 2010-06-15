<?php $_POST['title'] = 'Events'; ?>
<?php $_POST['callout_title'] = 'Find out what we\'re up to.'; ?>
<?php $_POST['callout_text'] = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.';?>
<?php $_POST['custom_css'] = array('events.css'); ?>
<?php require('../master/header.php'); ?>

                    <!-- content starts here -->
                    <div class="event legend">
                        <span class="date">Date</span>
                        <span class="time">Time</span>
                        <span class="desc">Description</span>
                    </div>
                    <div class="event">
                        <span class="date">Tuesday June 15</span>
                        <span class="time">2:00PM</span>
                        <span class="desc">Here is an example of some text you expect to see. This is an example of some text you might expect to see. Today is an event which is important for the competition.</span>
                    </div>
                    <div class="event">
                        <span class="date">Wednesday June 17</span>
                        <span class="time">5:00PM</span>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                    <div class="event">
                        <span class="date">Thursday June 18</span>
                        <span class="time">11:00AM</span>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                    <div class="event">
                        <span class="date">Saturday September 15</span>
                        <span class="time">12:00PM</span>
                        <span class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                    </div>
                    <!-- end of content -->

<?php require('../master/footer.php'); ?>