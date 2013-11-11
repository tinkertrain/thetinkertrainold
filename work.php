<?php

/**
 * Work template
 *
 */

include("./header.php");
?>
<div class="row visible-phone">
  <?php include("./menu.php"); ?>
</div>
<div class="row">
  <div class="span12">
    <h1><?= $page->title ?></h1>
  </div>
</div>
<div class="row blurb">
  <?= $page->body ?>
</div>
<div class="row train-line">
  <a href="#" class="previous">Previous</a>
  <a href="#" class="next">Next</a>
  <ul class="past-projects">
    <?php $i = 1; ?>
    <?php foreach ($page->projects as $project) : ?>
        <li>
          <div class="project-logo project-<?= $i ?>">
            <img src="<?= $project->images->url ?>" alt="Project Logo">
          </div>
        </li>
        <?php $i++; ?>
    <?php endforeach; ?>
    <li>
      <div class="end-of-line"><p>End of the line</p></div>
    </li>
  </ul>
</div>
<?php $j = 1; ?>
<?php foreach ($page->projects as $project) : ?>
  <div class="project-details project-<?= $j ?>">
    <p><span>Project: </span><span><?= $project->project_title ?></span></p>
    <p><span>Description: </span><?= $project->summary ?></p>
    <p><span>Involvement: </span><?= $project->involvement ?></p>
    <div class="project-links">
      <a class="icon-new-tab" href="<?= $project->link_url ?>" target="_blank"><?= $project->link_label ?></a>
      <a class="icon-exit" href="#">Close</a>
    </div>
  </div>
  <?php $j++; ?>
<?php endforeach; ?>
<div class="row visible-tablet visible-desktop">
  <?php include("./menu.php"); ?>
</div>

<?php include("./footer.php"); ?>