<?php

/**
 * Home template
 *
 */

include("./header.php");
?>

<div class="row">

  <section class="visible-desktop">
    <h1>The Tinkertrain</h1>
    <div class="train">
    </div>

    <div class="tinkertrain">
      <img src="/site/templates/images/the-tinkertrain.png" alt="The Tinkertrain">
    </div>

    <div class="greeting visible-desktop">
      <?= $page->greeting ?>
    </div>

    <?php include("./menu.php"); ?>
  </section><!-- section.visible-desktop -->

  <section class="visible-tablet">
    <h1>The Tinkertrain</h1>
    <div class="train">
    </div>
    <div class="tinkertrain">
      <img src="/site/templates/images/the-tinkertrain.png" alt="The Tinkertrain">
    </div>
    <div class="greeting">
      <?= $page->greeting ?>
    </div>
    <?php include("./menu.php"); ?>
  </section><!-- section.visible-tablet -->

  <section class="visible-phone">
    <h1>The Tinkertrain</h1>
    <?php include("./menu.php"); ?>
    <div class="row tinker-phone">
      <div class="greeting">
        <?= $page->greeting ?>
      </div>
      <div class="tinkertrain">
        <img src="/site/templates/images/the-tinkertrain.png" alt="The Tinkertrain">
      </div>
    </div>
  </section><!-- section.visible-phone -->

<?php include("./footer.php"); ?>