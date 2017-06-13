<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
    </head>
    <body>
        <?php require_once('components/rotating-bg.html'); ?>
        <div class="site-container">
        	<?php require_once('components/left-panel.php'); ?>
            <div class="content-container">
                <div class="content">
                    <?php require_once('components/welcome-banner.html'); ?>
                    <div class="main-content" style="margin-bottom:15px;">
                        <h1>Guru Lukshmi is...</h1>
                        <h1>"GTA's MOST PASSIONATE DOSA MAKERS"</h1>
                        <h2 style="text-align:right;max-width:740px;width:100%;margin:0 auto 15px;">- The Toronto Star</h2>

                        <p style="text-shadow:none;max-width:740px;width:100%;margin:0 auto 15px;"><span style="font-weight:700;">GTA’S MOST PASSIONATE DOSA MAKERS</span><br>
                            Guru Lukshmi is an Authentic South Indian Restaurant. We serve you purely vegetarian food and give you the true flavours of South Indian home cooked food. The South Indian food is a brilliant blend of flavors, colors, seasoning, nutritional balance, fragrance, taste, and visual appeal. Cuisine from southern part of India offers a variety of popular dishes like Idli, dosa and sambhar are the most savoured items loved across India. However, there are more than these that can treat the taste buds.</p>

                        <!--<a href="reserve.php">-->
                            <div class="reserve-btn" style="text-shadow:none;">
                                Online Reservations Coming Soon<br>
                                To Make a Reservation, Please Call (905)-795-2299
                            </div>
                        <!--</a>-->
                    </div>
                    <div class="main-content">
                        <h1 style="color:#f2f2f2;">Now serving our new seasonal dishes!</h1>
                        <h2 style="margin:0;">Try our new winter menu for a limited time only.</h2>
                    </div>
                    <div class="twitter-area">
                        <table>
                            <tbody>
                                <tr>
                                    <td style="width:50px;">
                                        <a href="http://www.twitter.com" target="_blank">
                                            <img src="img/twitter-feed.png">
                                        </a>
                                    </td>
                                    <td>
                                        <div style="width:100%;overflow:hidden;">
                                            <iframe frameborder="0" scrolling="no" src="http://unoapp.com/30116"  width="100%" height="28"></iframe>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
        $(function(){
            // Pop-up #1
            var myimg = "./img/guru-winter-hours.jpg"; // Link to Image

            var current = new Date();
            console.log("CURRENT DATE:", current);
            current = current.getTime();

            // Start Date Section
            var startYear = 2016; // Start Year
            var startMonth = 1; // Start Month
            var startDay = 1; // Start Day

            var startDate = new Date();
            startDate = new Date(startYear, startMonth-1, startDay, 0, 0, 0, 0);
            console.log("START DATE: " +startDate);

            // Expiry Date Section
            var expYear = 2017; // Expiry Year
            var expMonth = 1; // Expiry Month
            var expDay = 1; // Expiry Day

            var expiryDate = new Date();
            expiryDate = new Date(expYear, expMonth-1, expDay, 0, 0, 0, 0);
            console.log("EXPIRY DATE: " +expiryDate);

            var checkDate = expiryDate.getTime();

            if (checkDate < current){
                console.log("POP UP EXPIRED");
            } else if(startDate > current) {
                console.log("POP UP STARTING ON "+startDate);
            } else {
                console.log("POP UP EXPIRES ON " +expiryDate);
                $.fancybox({ 
                    'autoScale': true,
                    'type': 'image',
                    'href': myimg,
                    maxWidth: 800,
                    // afterLoad: function() {
                    //     this.inner.prepend( '<a buttonid="105944" class="action_button buy-btn" style="position:absolute;bottom:0;left:0;right:0;" function="showHTML">Buy Now</a>' );
                    // },
                    onComplete:function(){} 
                });
            }
        });
    </script>
    <script>
        $('#navHome').addClass('selected');
        $('#resHome').addClass('selected');
    </script>
</html>