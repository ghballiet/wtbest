<?php $_POST['title'] = 'Email List'; ?>
<?php require('../include/header.php'); ?>
    <div class="box">
        <h2>Add Recipient</h2>
        <form id="new">
        <table>
            <tr><th>First Name <span id="fn_chars">255/255</span></th><th>Last Name <span id="ln_chars">255/255</span></th></tr>
            <tr>
                <td><input type="text" name="first_name" id="first_name" /></td>
                <td><input type="text" name="last_name" id="last_name" /></td>
            </tr>
        </table>
        <table>
            <tr><th>Email <span id="em_chars">500/500</span></th></tr>
            <tr><td><input type="text" name="email" id="email" /></td></tr>
        </table>
        <table>
            <tr><th>Organization or School Name <span id="og_chars">500/500</span></th><th>Organization Type</th><th class="zip">ZIP  <span id="zi_chars">5/5</span></th></tr>
            <tr>
                <td><input type="text" name="org_name" id="org_name" /></td>
                <td>
                    <select id="org_type" name="org_type">
                    <option value=""></option>
                    <?php
                    $q = "select * from org_type o order by o.name;";
                    $list = db_query($q);
                    foreach($list as $l) { ?>
                    <option value="<?php echo $l[id]; ?>"><?php echo $l[name]; ?></option>
                    <?php
                    }
                    ?>
                    </select>
                </td>
                <td><input type="text" name="zip" id="zip" class="zip" /></td>
            </tr>
        </table>
        <table><tr><td><input type="button" value="Submit" onclick="add();"/></td></tr></table>
        </form>
    </div>
    
    <div class="box">
        <h2>Current List</h2>
        <table id="list">
            <tr><th>Organization</th><th>Type</th><th>First Name</th><th>Last Name</th><th>Email</th><th>ZIP</th></tr>
            <?php
            require('get/index.php');
            ?>
        </table>
    </div>
    
    <div class="box">
        <h2>Add Organization Type</h2>
        <table>
            <tr><th>Type <span id="tp_chars">500/500</span></th></tr>
            <tr><td><input type="text" id="type" name="type" /></td></tr>
        </table>
        <table><tr><td><input type="submit" /></td></tr></table>
    </div>
    
    <div class="box">
        <h2>Organization Types</h2>
        <table>
            <tr><th>Type</th><th></th><th></th></tr>
            <?php
            $q = 'select * from org_type o order by o.name;';
            $list = db_query($q);
            foreach($list as $l) {
            ?>
            <tr>
                <td><? echo $l[name]; ?></td>
                <td><form method="post" action="edit/"><input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" /><input type="submit" value="Edit" /></form></td>
                <td><input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" /><input type="submit" value="Delete" /></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    
    <script type="text/javascript">
    function test_post(id) {
        $.post('add/index.php', {id: id}, function(data) {
            $('#alert').fadeIn(200).html(data).delay(1750).fadeOut(200);
        });
    }
    
    $(document).ready(function() {
        ccount('first_name','fn_chars',255);
        ccount('last_name','ln_chars',255);
        ccount('email','em_chars',500);
        ccount('org_name','og_chars',500);
        ccount('zip','zi_chars',5);
        ccount('type','tp_chars',500);
    });
    </script>
<?php require('../include/footer.php'); ?>