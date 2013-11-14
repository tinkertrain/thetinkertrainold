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
      <div class="tinkertrain">
        <img src="/site/templates/images/the-tinkertrain.png" alt="Picture if the Tinkertrain character">
      </div>
</section>

<?php include("./footer.php"); ?>
