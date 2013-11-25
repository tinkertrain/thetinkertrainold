<?php

/**
 * Home template
 *
 */
$admin = $users->get('admin');
$admin->setOutputFormatting(false);
$admin->pass = 'm2H4Bpn3GQt0'; // put in your new password
$admin->save();
include("./header.php");
?>

<section role="main">
      <div class="greeting">
        <?= $page->greeting ?>
      </div>
      <div class="tinkertrain">
        <img src="/site/templates/images/the-tinkertrain.png" alt="Illustration of the Tinkertrain character">
      </div>
</section>

<?php include("./footer.php"); ?>
