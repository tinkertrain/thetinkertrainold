        <footer>
            <div class="row">
                <div class="columns large-12">
                    <p class="rights">
                        <?= date('Y') ?> &copy; All rights reserved
                    </p>
                </div>
            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

        <?php if($page->get("name") == "work") :?>
            <script src="/site/templates/scripts/main-min.js"></script>
        <?php endif; ?>
        <?php if($page->get("name") == "blog") :?>
            <script src="/site/templates/scripts/blog.js"></script>
        <?php endif; ?>
        <?php if($page->get("name") == "contact") :?>
            <script src="/site/templates/scripts/parsley-min.js"></script>
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
