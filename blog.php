<?php

/**
 * Home template
 *
 */

include("./header.php");
?>
	<section role="main">
		<?php
			$articles = $page->children("id>1, limit=3");
			$pagination = $articles->renderPager(array(
        'nextItemLabel' => "&raquo;",
        'previousItemLabel' => "&laquo;",
        'previousItemClass' => "arrow",
        'currentItemClass' => "current",
        'nextItemClass' => "arrow",
        'listMarkup' => "<ul class='pagination'>{out}</ul>",
        'itemMarkup' => "<li class='{class}'>{out}</li>",
        'linkMarkup' => "<a href='{url}'><span>{out}</span></a>"
    )); ?>

    <?php foreach ($articles as $article): ?>
        <article role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <h2>
                <a href="<?= $article->url ?>">
                    <img src="<?= $article->article_icon->url ?>"/>
                    <?= $article->title ?>
                </a>
                <time itemprop="dateCreated" datetime="<?= date('Y-m-d', $article->getUnformatted("article_date")) ?>"><?= $article->article_date ?></time>
        </article>
        <?= $pagination ?>
	<?php endforeach; ?>
	</section>

<?php include("./footer.php") ?>
