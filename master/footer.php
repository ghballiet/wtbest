                </div>
            </div>
            <div id="push"></div>
        </div>
        <div id="footer">
            <div class="shadow-top"></div>            
            <div class="container">
                <div id="foot_nav">
                    <ul><?php require('nav.php'); ?><?php genli('../admin','Administrator Login',''); ?></ul>
                </div>
                <div id="foot_copy">
                    Design Copyright &copy; Glen Hunt &amp; Jennifer Emanuel. All Rights Reserved. 
                </div>
            </div>
        </div>
        <?php db_disconnect($link); ?>
    </body>
</html>