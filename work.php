<?php

/**
 * Work template
 *
 */


$testing = false;
?>

<?php if ($testing || $config->ajax) : ?>
  <?php
    $projectReceived = $_POST["projectId"];
    $title = $page->projects[$projectReceived]->project_title;
    $involvement = $page->projects[$projectReceived]->project_involvement;
    $details = $page->projects[$projectReceived]->project_details;
    $logo = $page->projects[$projectReceived]->project_logo;
    $tech = $page->projects[$projectReceived]->project_tech;
    $url = $page->projects[$projectReceived]->project_url;
    $screenshots = $page->projects[$projectReceived]->project_screenshots;
    $demo = $page->projects[$projectReceived]->project_demo;
   ?>

<div class="project-detail project-<?= $projectReceived + 1 ?>">
  <button class="close">&times;</button>
  <section class="details">
    <h2>Project</h2>
    <div>
      <h3>
        <?php
          if ($url) echo "<a href='$url'>$title</a>";
          elseif ($demo) echo "<a href='$demo'>$title</a>";
          else  echo $title;
        ?>
      </h3>
      <p><?= $details ?></p>
    </div><!--
    --><div class="project-logo">
      <img src="<?= $logo->url ?>" alt="Project logo">
    </div>
  </section>

  <section class="involvement">
    <h2>Involvement</h2>
    <p><?= $involvement ?></p>
  </section>

  <div>
    <section class="tech">
      <h2>Tech</h2>
      <div><?= $tech ?></div>
    </section>
    <?php if(count($screenshots) > 0): ?>
      <section class="screenshots">
        <h2>Screenshots</h2>
        <ul>
          <?php foreach($screenshots as $screen): ?>
            <?php
              $options = array(
                'quality' => 90,
                'upscaling' => false
              );
              $thumb =  $screen->size(50, 50, $options);
            ?>
          <li>
            <a href="<?= $screen->url ?>" target="_blank">
              <img src="<?= $thumb->url ?>" alt="Screenshot">
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </section>
    <?php endif; ?>
  </div>
</div>

<?php else: ?>
<?php include("./header.php"); ?>
<section role="main">

  <?= $page->body ?>

<div class="train-line">

  <button class="paginate previous"><i></i><i></i></button>
  <button class="paginate next"><i></i><i></i></button>

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
<?php endif; ?>
