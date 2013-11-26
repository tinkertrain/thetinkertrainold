        <footer role="contentinfo" class="main">
            <div class="wrapped">
                <?php include("./menu-contact.php"); ?>
                <p role="contentinfo">
                    <?= date('Y') ?> &copy; All rights reserved
                </p>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>

        <?php if($page->get("name") == "home" || $page->get("name") == "about" || $page->get("name") == "blog" ) :?>
            <script src="/site/templates/scripts/dist/main-min.js"></script>
        <?php endif; ?>

        <?php if($page->get("name") == "work") :?>
            <script src="/site/templates/scripts/dist/work-min.js"></script>
        <?php endif; ?>

        <?php if($page->template == "post") :?>
            <script src="/site/templates/scripts/dist/blog-min.js"></script>
        <?php endif; ?>


        <!-- Google Analytics -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-39537262-1');ga('send','pageview');
        </script>

        <!-- Browser sync, for dev only
        <script src='http://192.168.34.124:3000/socket.io/socket.io.js'></script>
        <script src='http://192.168.34.124:3001/browser-sync-client.min.js'></script>
        -->
    </body>
</html>
