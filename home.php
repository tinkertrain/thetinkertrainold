<?php

/**
 * Home template
 *
 */

include("./header.php");
?>

<section role="main">
  <div class="row">
    <div class="columns large-12">
      <div class="greeting">
        <?= $page->greeting ?>
      </div>
      <div class="tinkertrain">
        <img src="/site/templates/images/the-tinkertrain.png" alt="The Tinkertrain">
      </div>
    </div>
  </div>
</section>

<?php include("./footer.php"); ?>
