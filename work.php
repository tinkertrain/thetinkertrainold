<?php

/**
 * Work template
 *
 */

include("./header.php");
?>
<section role="main">

  <?= $page->body ?>

<div class="train-line">

  <button class="previous">&lsaquo; Previous</button>
  <button class="next">Next &rsaquo;</button>

  <ul class="projects">
    <?php $i = 1; ?>
    <?php foreach ($page->projects as $project) : ?>
      <?php
        $options = array(
          'quality' => 90,
          'upscaling' => false
        );
        $logo =  $project->project_logo->width(140, $options);
      ?>
        <li class="project">
          <div class="project-<?= $i ?>">
            <img src="<?= $logo->url ?>" alt="Project Logo">
          </div>
        </li>
        <?php $i++; ?>
    <?php endforeach; ?>
  </ul>
</div>
</section>

<?php include("./footer.php"); ?>
