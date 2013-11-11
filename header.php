<?php
$template = $config->urls->templates;
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $page->get("headline|title"); ?></title>
        <meta name="description" content="<?php echo $page->summary; ?>" />
        <meta name="viewport" content="width=device-width">
        <meta name="author" content="Juan Pablo Lomeli Diaz">
        <meta name="keywords" content="web design, web development, web developer, web designer, illustration, portfolio, illustrator, freelance">

        <link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/main.css" />

        <?php if($page->get("name") == "blog"): ?>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <?php endif; ?>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>-->
    </head>
    <body class="page-<?= $page->get("name") ?>">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="container">
        <?php if($page->get("name") != "blog"): ?>
            <a href="/" class="home-link">
                <span data-icon="&#xe007;" aria-hidden="true"></span>
                <span class="screen-reader-text">Home</span>
            </a>
        <?php endif; ?>