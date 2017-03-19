        <script src="../assets/scripts/plugins.js"></script>

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/libraries/jquery/jquery.min.js"><\/script>')</script>

        <!-- Bootstrap -->
        <script src="../assets/libraries/bootstrap/js/bootstrap.min.js"></script>

        <!-- Custom Lazy Scripts -->
        <?php
            if (isset($js)) {
                foreach ($js as $url) {
                    echo "<script src=\"$url\"></script>";
                }
            }
        ?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
