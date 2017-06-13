<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <style>
            h1 { margin-bottom:0; }
        </style>
    </head>
    <body>
        <?php require_once('components/rotating-bg.html'); ?>
        <div class="site-container">
            <?php require_once('components/left-panel.php'); ?>
            <div class="content-container">
                <div class="sub-content">
                    <?php require_once('components/other-banners.html'); ?>
                    <div class="main-content" style="text-align:left;display:inline-block;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11549.717168689402!2d-79.716199!3d43.639236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2e7ba665ab732338!2sGuru+Lukshmi!5e0!3m2!1sen!2sca!4v1417463031704" width="100%" height="300" frameborder="0" style="border:0;margin-bottom:15px;"></iframe>

                        <div class="contact-left">
                            <h1>Address:</h1>
                            <p><a href="https://www.google.com/maps?ll=43.639236,-79.716199&z=14&t=m&hl=en-GB&gl=CA&mapclient=embed&cid=3349453703478453048" target="_blank">7070 Saint Barbara Blvd. Unit #45 &amp; #50<br>
                                (Derry and Maclaughan)<br>
                                Mississauga, ON<br>
                                L5W 0E6</a></p>

                            <h1>Phone:</h1>
                            <p>905.795.2299</p>

                            <h1>Email:</h1>
                            <p><a href="mailto:info@gurulukshmi.com">info@gurulukshmi.com</a></p>

                            <p>* Prices are subject to change without prior notice.<br>
                                * We charge 12% gratuity for more than 8 people.</p>
                        </div>
                        <div class="contact-right"> 
                            <h1>Hours of Operation:</h1>
                            <h3>Monday - Sunday</h3>
                            <p><span class="bold" style="text-transform:uppercase;">Hours of Operation</span><br>
                                <span class="bold" style="color:#ba7802;">Monday - Thursday</span><br>
                                Dinner only from 5pm - 10pm<br>
                                <span class="bold" style="color:#ba7802">Friay - Sunday</span><br>
                                Lunch from Noon - 3pm<br>
                                Dinner from 5pm - 10pm<br>
                                <span class="bold" style="color:#ba7802">Open 7 Days a Week</span><br>
                                (<span style="font-size:90%;">Spring / Summer hours resume June 2016</span>)</p>

                            <!--<a href="reserve.php">-->
                                <div class="reserve-btn" style="text-shadow:none;display:inline-block;">
                                    To Make a Reservation, Please Call (905)-795-2299
                                </div>
                            <!--</a>-->
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <?php require_once('components/footer.html'); ?>
            <div class="clear"></div>
        </div>
    </body>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('#navContact').addClass('selected');
        $('#resContact').addClass('selected');
        $('.contact-banner').css('display','block');
    </script>
</html>