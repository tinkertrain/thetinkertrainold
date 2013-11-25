<?php

/**
 * Home template
 *
 */

include("./header.php");
?>

	<section role="main">
		<menu class="switcher" type="toolbar">
			<button class="day"><span>Toggle Day/Night</span></button>
			<button class="serif">F</button>
		</menu>

		<article role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <header>
                <h1><?= $page->title ?></h1>
                <img src="<?= $page->article_icon->url ?>" alt="Icon" class="post-logo">
            </header>
            <article>
                <?= $page->article ?>
            </article>
            <footer role="contentinfo">
                <time itemprop="dateCreated" datetime="<?= date('Y-m-d', $page->getUnformatted("article_date")) ?>"><?= $page->article_date ?></time>
            </footer>

        </article>
	</section>

<?php include("./footer.php") ?>
