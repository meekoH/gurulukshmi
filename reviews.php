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
                <div class="sub-content">
                    <?php require_once('components/other-banners.html'); ?>
                    <div class="main-content" style="text-align:left;">
                        <div id="review_widget_110490"></div>
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
        $('#navReviews').addClass('selected');
        $('#resReviews').addClass('selected');
        $('.reviews-banner').css('display','block');
    </script>
</html>