<?php
    $title = "Robert Metcalfe - Portfolio";
    $css = array(
        "../assets/styles/sprites.css",
        "splash.css"
     );
    require '../partials/header.php';
?>

<div class="site-wrapper">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand">Robert Metcalfe</h3>

                    <ul class="nav masthead-nav">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>

                        <li><a href="#">Features</a></li>

                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading">About Me</h1>

                <p class="lead">I'm amazing.</p>

                <p class="lead">
                    <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Find me:
                        <a href="https://github.com/rmetc91" target="_blank">
                            <i class="sprite sprite-github"></i>
                        </a>

                        <a href="mailto:rmetc91@gmail.com" target="_blank">
                            <i class="sprite sprite-gmail"></i>
                        </a>

                        <a href="https://ie.linkedin.com/pub/robert-metcalfe/48/408/a68/" target="_blank">
                            <i class="sprite sprite-linkedin"></i>
                        </a>

                        <a href="http://stackoverflow.com/users/2347458/roberto" target="_blank">
                            <i class="sprite sprite-stackoverflow"></i>
                        </a>

                        <i class="sprite sprite-tumblr"></i>
                        <i class="sprite sprite-twitter"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $js = array(
        "../assets/libraries/webpack/bundle.js"
    );
    require '../partials/footer.php';
?>
