<?php

/**
 * Home template
 *
 */

include("./header.php");
?>

	<section role="main">
		<div class="switcher">
			<button class="day"><span>Toggle Day/Night</span></button>
			<button class="serif">F</button>
		</div>

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
    ));
			foreach ($articles as $article)
        {
          echo "<article>";
          echo "<h2><a href='$article->url'><img src='{$article->article_icon->url}'/>{$article->title}</a><p class='date'>{$article->article_date}</p></h2>";
          echo "</article>";
        }
        echo $pagination;
		 ?>
	</section>

<?php include("./footer.php") ?>
