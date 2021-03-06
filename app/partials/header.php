<!doctype html>
<html class="no-js" lang="">
    <head>
        <title><?=$title?></title>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="Robert Metcalfe">
        <meta name="description" content="Robert Metcalfe's Web Portfolio">

        <link rel="apple-touch-icon" href="../apple-touch-icon.png">
        <link rel="icon" href="../favicon.ico">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="../assets/libraries/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="../assets/styles/sprites.css">

        <?php
            if (isset($css)) {
                foreach ($css as $url) {
                    echo "<link rel=\"stylesheet\" href=\"$url\"/>";
                }
            }
        ?>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">
            You are using an <strong>outdated</strong> browser.
            Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
        </p>
        <![endif]-->
