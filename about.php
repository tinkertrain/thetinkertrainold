<?php

/**
 * About template
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
<div class="row">
  <div class="span12">
    <?= $page->body; ?>
  </div>
</div>
<div class="row">
    <div class="span12">
      <img src="/site/templates/images/tinkertrain-folder.png" alt="The Tinkertrain">
    </div>
</div>
<div class="row">
  <div class="span12">
    <h3>About this website</h3>
  </div>
</div>
<div class="row about-wb">
  <div class="span12">
    <?= $page->aboutwebsite ?>
  </div>
</div>
<div class="row visible-tablet visible-desktop">
  <?php include("./menu.php"); ?>
</div>

<?php include("./footer.php"); ?>