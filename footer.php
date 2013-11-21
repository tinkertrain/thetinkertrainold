        <footer>
            <div class="wrapped">
                <?php include("./menu-contact.php"); ?>
                <p role="contentinfo">
                    <?= date('Y') ?> &copy; All rights reserved
                </p>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js"></script>

        <script src="/site/templates/scripts/main-min.js"></script>

        <?php if($page->get("name") == "work") :?>
            <script src="/site/templates/scripts/work.js"></script>
        <?php endif; ?>

        <?php if($page->get("name") == "blog") :?>
            <script src="/site/templates/scripts/blog.js"></script>
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

    </body>
</html>
