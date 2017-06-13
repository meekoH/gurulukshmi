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
                    <?php require_once('components/sub-navigation.html'); ?>
                    <div class="main-content" style="text-align:left;">
                        <!-- Appetizers Area -->
                        <div class="menu-area" id="appetizers">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Appetizers</h1>

                            <h3>Finger Foods</h3>
                            <div id="menu_widget_110460"></div>
                            
                            <h3>Vada</h3>
                            <div id="menu_widget_110462"></div>

                            <h3>Soups - Rasam</h3>
                            <div id="menu_widget_110472"></div>
                        </div>
                        <!-- Indian Breads Area -->
                        <div class="menu-area" id="indianBreads">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Indian Breads</h1>
                            <div id="menu_widget_110473"></div>
                        </div>
                        <!-- Variety Rice Area -->
                        <div class="menu-area" id="idly">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Idly</h1>
                            <div id="menu_widget_110474"></div>

                            <h3>Combos</h3>
                            <div id="menu_widget_110475"></div>
                        </div>
                        <!-- Dosa Basics Area -->
                        <div class="menu-area" id="dosaBasics">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Dosa - The Basics</h1>
                            <div id="menu_widget_110476"></div>

                            <h3>Kids Dosa</h3>
                            <div id="menu_widget_110477"></div>

                            <h3>Dosa - The Basics</h3>
                            <div id="menu_widget_110478"></div>
                        </div>
                        <!-- Signature Dosa Area -->
                        <div class="menu-area" id="signatureDosa">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Creative / Signature Dosa</h1>
                            <div id="menu_widget_110479"></div>
                        </div>
                        <!-- Jain / Swaminarayan Area -->
                        <div class="menu-area" id="jain">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Jain / Swaminarayan Community Specials</h1>
                            <div id="menu_widget_110480"></div>

                            <h3>Jain Uthapams</h3>
                            <div id="menu_widget_110481"></div>
                        </div>
                        <!-- Uthapams Area -->
                        <div class="menu-area" id="uthapams">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Uthapams</h1>
                            <div id="menu_widget_110482"></div>
                        </div>
                        <!-- Lunch Area -->
                        <div class="menu-area" id="lunch">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Lunch Items</h1>
                            <div id="menu_widget_110483"></div>
                        </div>
                        <!-- Side Dish Area -->
                        <div class="menu-area" id="sides">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Side Dish</h1>
                            <div id="menu_widget_110484"></div>
                        </div>
                        <!-- Dessert Area -->
                        <div class="menu-area" id="dessert">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Dessert</h1>
                            <div id="menu_widget_110485"></div>
                        </div>
                        <!-- Beverages Area -->
                        <div class="menu-area" id="beverages">
                            <h1 style="border-bottom:1px solid #f8c140;padding-bottom:5px;">Beverages</h1>
                            <div id="menu_widget_110486"></div>
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
        $('#navMenu').addClass('selected');
        $('#resMenu').addClass('selected');
        $('.menu-banner').css('display','block');
    </script>
</html>