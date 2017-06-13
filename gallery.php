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
                        <div id="gallery" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="img/gallery/gallery1.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery2.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery3.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery4.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery5.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery6.jpg">
                                </li>
                            </ul>
                        </div>
                        <div id="galleryCarousel" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="img/gallery/gallery1-thumb.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery2-thumb.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery3-thumb.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery4-thumb.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery5-thumb.jpg">
                                </li>
                                <li>
                                    <img src="img/gallery/gallery6-thumb.jpg">
                                </li>
                            </ul>
                        </div>
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
        $('#navGallery').addClass('selected');
        $('#resGallery').addClass('selected');
        $('.gallery-banner').css('display','block');
    </script>
</html>