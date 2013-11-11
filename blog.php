<?php

/**
 * Home template
 *
 */

include("./header.php");
?>

<div class="row">
	<div class="offset10 span2">
		<div class="switcher">
			<button class="day">Toggle Day/Night</button>
			<button class="serif">F</button>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="mrtinker-blog">
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
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
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="portfolio-link">
			<a href="/">Portfolio</a>
		</div>
	</div>
</div>
<?php include("./footer.php") ?>