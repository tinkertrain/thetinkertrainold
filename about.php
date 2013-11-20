<?php

/**
 * About template
 *
 */

include("./header.php");
?>
<section role="main">
  <?= $page->body; ?>

  <div class="cv">
    <a href="#">
      <img src="/site/templates/images/tinkertrain-folder.png" alt="Illustration of the Tinkertrain handing out documents">
      <p>Oh, and in case you are interested here's my CV</p>
    </a>
  </div>

  <section class="extra-info">
    <div>
      <button>Technologies</button>
      <button>About this site</button>
    </div>
    <div class="about-this-site">
      <?php  echo $page->aboutwebsite; ?>
    </div>
    <div class="technologies">
      <?php  echo $page->technologies; ?>
    </div>
  </section>

</section>



<?php include("./footer.php"); ?>
