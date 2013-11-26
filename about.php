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
    <a href="/site/templates/docs/cv.pdf" target="_blank">
      <img src="/site/templates/images/tinkertrain-folder.png" alt="Illustration of the Tinkertrain handing out documents">
      <p>Oh, and in case you are interested here&rsquo;s my CV</p>
    </a>
  </div>

  <section class="extra-info">
    <div>
      <button class="icon-beaker"><span>Technologies</span></button>
      <button class="icon-list-ul"><span>About this site</span></button>
    </div>
    <div class="about-this-site bubble">
      <?php  echo $page->aboutwebsite; ?>
    </div>
    <div class="technologies bubble">
      <?php  echo $page->technologies; ?>
    </div>
  </section>

</section>



<?php include("./footer.php"); ?>
