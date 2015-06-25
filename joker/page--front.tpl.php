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
            <h2 class="remove-spacing box"><?php print $site_slogan; ?></h2>
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
                <div id="nav" >
                    <?php print drupal_render(menu_tree('main-menu')); ?>
                </div>


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



    <div id="nav2">
        <div class="centre">
            <?php print drupal_render(menu_tree('menu-secondary-menu')); ?>
        </div>
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
                <div class="pure-u-1 pure-u-sm-3-5">
                    <h1 class="remove-spacing">Latest News</h1>
                </div>
                <div class="pure-u-1 pure-u-sm-2-5 ">
                    <h3 class="remove-spacing">Subscribe for updates</h3>
                    <form action="#" method="POST">
                        <input type="email" name="email" placeholder="Enter valid email" id="subscribe" required="">
                        <br>
                        <input type="submit" value="Subscribe now" class="button float-right">
                    </form>
                </div>
            </div>
            <hr>
            <div class="remove-spacing pure-g">
                <div id="upcoming-race" class="pure-u-1 pure-u-sm-3-5">
                    <div class="box sidebar-right">
                        <?php print render($page['content']) ?>
                        <!--<h2 class="remove-spacing">Upcoming Race Events</h2>
                        <hr class="dashed">
                        <div class="pure-g"><!--Race event node-->
                            <!--<div class="pure-u-1-3">
                                <a href="#"><img src="img/rcgears-small.png" alt="club picture" class="pure-img"></a>
                            </div>
                            <div class="pure-u-2-3">
                                <h3 class="remove-spacing">Race Title</h3>
                                <span class="event-text remove-spacing">July 29-30, 2015 - </span>
                                <span class="event-text remove-spacing">Calgary, AB, CA</span>
                                <p>
                                    Lorem ipsum dolor sit amet, vix ad euismod scriptorem. Quo prodesset dissentiet et, pri ea nostro utamur maiorum. Legendos comprehensam vis eu, no sed illum concludaturque. Eos eu reque saperet epicurei, sed ad nobis platonem iudicabit. Modus reformidans usu ei.
                                </p>
                            </div>

                        </div>
                        <hr>-->
                    </div>
                </div>
                <div class="pure-u-1 pure-u-sm-2-5 ">
                    <div class=" box">
                        <?php print render($page['sidebar_first']) ?>
                    </div>
                </div>
                <!--<div class="pure-u-1 pure-u-sm-2-5 ">
                    <div class=" box">
                        <h2 class="remove-spacing">Track Development</h2>
                        <hr class="dashed">

                        <div>
                            <h3 class="remove-spacing">Race Title</h3><!--Track update node-->
                            <!--<span class="event-text remove-spacing">July 29-30, 2015 - </span>
                            <span class="event-text remove-spacing">Calgary, AB, CA</span>
                            <p>
                                Lorem ipsum dolor sit amet, vix ad euismod scriptorem. Quo prodesset dissentiet et, pri ea nostro utamur maiorum. Legendos comprehensam vis eu, no sed illum concludaturque. Eos eu reque saperet epicurei, sed ad nobis platonem iudicabit. Modus reformidans usu ei.
                            </p>
                        </div>
                        <hr>
                    </div>
                </div>-->
            </div>
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