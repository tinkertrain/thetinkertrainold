<?php
$template = $config->urls->templates;
 ?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $page->get("headline|title"); ?></title>
        <meta name="description" content="<?php echo $page->summary; ?>" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Juan Pablo Lomeli Diaz">
        <meta name="keywords" content="web design, web development, web developer, web designer, illustration, portfolio, illustrator, freelance">

        <link rel="stylesheet" href="<?php echo $config->urls->templates?>styles/main.css" />

        <?php if($page->get("name") == "blog"): ?>
            <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <?php endif; ?>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>-->
    </head>
    <body class="page-<?= $page->get("name") ?>">
        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
