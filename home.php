<?php

/**
 * Home template
 *
 */

include("./header.php");
?>

<section role="main">
      <div class="greeting">
        <?= $page->greeting ?>
      </div>
<!--       <div class="train">
        <img src="/site/templates/images/train-fullwidth.png" alt="Illustration of the Tinkertrain's train">
      </div> -->
      <div class="tinkertrain">
        <img src="/site/templates/images/the-tinkertrain.png" alt="Illustration of the Tinkertrain character">
      </div>
</section>

<?php include("./footer.php"); ?>
