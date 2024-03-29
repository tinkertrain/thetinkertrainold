<?php
$template = $config->urls->templates;
 ?>
<!DOCTYPE html>
<html>
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
        <script src="/site/templates/scripts/modernizr-custom.js"></script>

    </head>
    <body class="<?php if ($page->template == 'post') echo "page-post"; else echo "page-" . $page->get('name'); ?>">

        <!--[if lt IE 8]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <header role="banner" <?php if($page->get("name") !='home') echo "class='page'"; ?>>

            <?php include("./menu.php"); ?>

            <?php if($page->get("name") == 'about'): ?>
                <h2 class='getBig'><?= $page->title ?></h2>
            <?php endif; ?>

            <?php if($page->get("name") == 'blog' || $page->template == 'post' ): ?>
                <img class="blog-logo" src="/site/templates/images/mrtinker.svg" alt="The Tinkertrain pixelated illustration">
            <?php else: ?>
                <h1 class="getBig"><span class="prefix">The</span><span class="slabtext">Tinkertrain</span></h1>
            <?php endif; ?>

            <?php if($page->get("name") == 'work'): ?>
                <h2><?= $page->title ?></h2>
            <?php endif; ?>

        </header>

