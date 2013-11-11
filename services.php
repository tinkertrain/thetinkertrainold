<?php

/**
 * Services template
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
  <?php
  $count = 0;
  foreach($page->myservices as $service)
  {
    switch ($count) {
      case '0':
        $h2class = "icon-edit";
        break;
      case '1':
        $h2class = "icon-beaker";
        break;
      case '2':
        $h2class = "icon-brush";
        break;
    }
    echo "<div class='span4'>";
    echo "<h2>{$service->services_title}</h2>";
    echo "<p>{$service->services_description}</p>";
    echo "</div>";
    $count++;
  }
   ?>
</div>
<div class="row toolbox">
  <img src="/site/templates/images/tinkertrain-toolbox.png" alt="The Tinkertrain">
</div>
<div class="row visible-tablet visible-desktop">
  <?php include("./menu.php"); ?>
</div>

<?php include("./footer.php"); ?>