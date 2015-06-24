<!doctype html>
<html>
<head>
    <!--<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A remake of the Joker Lane Raceway site">

    <title>Joker Lane Raceway - Lets Race!</title> -->


    <!--<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">-->
    <!--<link rel="stylesheet" href="css/pure/pure-min.css">
    <link rel="stylesheet" href="css/pure/grids-min.css">
    <link rel="stylesheet" href="css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="css/style.css">


    <link rel="icon" type="image/png" href="img/favicon.png">

    <!--[if lte IE 8]>
    <!--<link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <!--<link rel="stylesheet" href="css/layouts/side-menu.css">
    <!--<![endif]-->
</head>
<body>
<div id="content-container" >
    <div id="logo-and-nav" class="pure-g">
        <div class="pure-u-1 pure-u-sm-1 pure-u-md-2-5 ">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="pure-img">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>
<!--            <a href="index.html"><img src="img/logo.png" alt="Joker Lane Raceway" class="pure-img"></a>-->
        </div>
        <div class="pure-u-1 pure-u-sm-1 pure-u-md-3-5">
            <!--<h1 id="sneak-peak">Sneak Peak In!</h1>
             <span id="countdown" ></span>
             <script type="text/javascript">
               $("#countdown")
               .countdown("2015/05/30", function(event) {
                     $(this).text(
                               event.strftime('%D days %H:%M:%Ss')
                     );
                   });
            </script>-->
            <div id="push-down">

                <!--<span id="social-media">
                    <a href="https://www.facebook.com/pages/AKA-Racing-Team/585982068209490"><img src="img/FB-f-Logo__white_29.png" alt="Facebook"></a>
                    <a href="#"><img src="img/YouTube-logo-light-small.png" alt="Youtube" class="hidden"></a>
                    <a href="#"><img src="img/Twitter_logo_white_Small.png" alt="Twitter" class="hidden"></a>
                    <a href="#"><img src="img/Instagram-white-small.png" alt="Instagram" class="hidden"></a>
                </span>-->

                <?php print render($page['social_media']); ?>
                <div class="clear"></div>

                <!--<div id="nav" class="pure-menu pure-menu-horizontal pure-menu-scrollable">-->
                    <?php print drupal_render(menu_tree('main-menu')); ?>


                    <!--
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item "><a href="calendar.html" class="navigate pure-menu-link">Calendar</a></li>
                        <li class="pure-menu-separator"></li>
                        <li class="pure-menu-item"><a href="gallery.html" class="navigate pure-menu-link">Gallery</a></li>
                        <li class="pure-menu-separator"></li>
                        <li class="pure-menu-item"><a href="bookings.html" class="navigate pure-menu-link">Bookings</a></li>
                        <li class="pure-menu-separator"></li>
                        <li class="pure-menu-item"><a href="hours.html" class="navigate pure-menu-link">Hours</a></li>
                        <li class="pure-menu-separator"></li>
                        <li class="pure-menu-item"><a href="contact.html" class="navigate pure-menu-link">Contact</a></li>
                    </ul>
                    -->
                <!--</div>-->
            </div>
        </div>
    </div>



    <div id="nav2" class="pure-menu pure-menu-horizontal pure-menu-scrollable">
        <ul class="pure-menu-list centre">
            <?php print drupal_render(menu_tree('secondary-menu')); ?>
            <!--
            <li class="pure-menu-item "><a href="track-info.html" class="navigate pure-menu-link">Track information</a></li>
            <li class="pure-menu-separator"></li>
            <li class="pure-menu-item"><a href="events.html" class="navigate pure-menu-link">Events</a></li>
            <li class="pure-menu-separator"></li>
            <li class="pure-menu-item"><a href="pro-shop.html" class="navigate pure-menu-link">Pro Shop</a></li>
            <li class="pure-menu-separator"></li>
            <li class="pure-menu-item"><a href="pro-team.html" class="navigate pure-menu-link">AKA Racing Team</a></li>
            -->
        </ul>
    </div>

    <!--<div id="welcome" class="pure-g black-background">
        <div class="pure-u-1 pure-u-sm-1-2">
            <div class="box ">
                <h1 id="welcome-left" class="centre">Welcome</h1>
                <p class="remove-spacing">To Calgary's first indoor off-road RC race track.</p>
            </div>
        </div>
        <div class="pure-u-1 pure-u-sm-1-2 ">
        </div>
    </div> -->

    <div id="main-content" class="black-background">
        <div class="box">
            <div class="body-header pure-g">
                    <h1 class="remove-spacing"><?php print render($title); ?></h1>
            </div>
            <hr>


                        <?php print render($page['content']) ?>

            </div>
        </div>

    <?php if ($page['footer']): ?>
    <div id="footer" class="black-background">
        <div class="box">
            <?php print render($page['footer']); ?>
            <!-- &copy; Joker Lane Raceway All rights Reserved.-->

            <div class="float-right">
                <?php print render($page['social_media']); ?>
                <!--<span>
                    <a href="https://www.facebook.com/pages/AKA-Racing-Team/585982068209490"><img src="img/FB-f-Logo__white_29.png" alt="Facebook"></a>
                    <a href="#"><img src="img/YouTube-logo-light-small.png" alt="Youtube" class="hidden"></a>
                    <a href="#"><img src="img/Twitter_logo_white_Small.png" alt="Twitter" class="hidden"></a>
                    <a href="#"><img src="img/Instagram-white-small.png" alt="Instagram" class="hidden"></a>
                </span>-->
            </div>

        </div>
    </div>
    <?php endif; ?>
</div>
</body>
</html>