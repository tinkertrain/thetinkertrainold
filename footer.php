            <p class="rights">
                2013 &copy; All rights reserved
            </p>
        </div><!-- div.container -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/site/templates/scripts/jquery-1.9.1.min.js"><\/script>')</script>
        <?php if($page->get("name") == "work") :?>
            <script src="/site/templates/scripts/main-min.js"></script>
        <?php endif; ?>
        <?php if($page->get("name") == "blog") :?>
            <script src="/site/templates/scripts/blog.js"></script>
        <?php endif; ?>
        <?php if($page->get("name") == "contact") :?>
            <script src="/site/templates/scripts/parsley-min.js"></script>
        <?php endif; ?>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-39537262-1', 'thetinkertrain.com');
          ga('send', 'pageview');

        </script>
    </body>
</html>