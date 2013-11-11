<?php

/**
 * Contact template
 *
 */

include("./header.php");
?>

<?php

//Check if the form has been posted
$nameEmpty= false;
$emailEmpty= false;
$messageEmpty= false;
$error = 5;
if($input->post->submit)
{
    $error = 0;
    $emailTo = $page->sendto_email;
    // sanitize form values
    $form = array(
      'inputName' => $sanitizer->text($input->post->inputName),
      'inputEmail' => $sanitizer->email($input->post->inputEmail),
      'inputMessage' => $sanitizer->textarea($input->post->inputMessage),
      );

    foreach ($form as $key => $value)
    {
      if( empty($value) )
      {
        switch ($key) {
          case 'inputName':
            $nameEmpty = true;
            $error++;
            break;

          case 'inputEmail':
            $emailEmpty = true;
            $error++;
            break;

          case 'inputMessage':
            $messageEmpty = true;
            $error++;
            break;
        }
      }
    }
    //if no errors, email!
    if($error == 0)
    {
      $headers = "From: " . strip_tags($form[inputEmail]) . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      $msg = '<html><body>';
      $msg = "<p><span style='font-weight:bold; color:#355070'>Name: </span>$form[inputName]</p>".
             "<p><span style='font-weight:bold; color:#355070'>Email: </span>$form[inputEmail]</p>".
             "<p><span style='font-weight:bold; color:#355070'>Message: </span>$form[inputMessage]</p>";
      $msg .= '</body></html>';
      mail($emailTo, "Message from thetinkertrain.com", $msg, $headers);
    }

}
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
  <div class="span8">
    <?= $page->body ?>
  </div>
  <div class="span4">
    <div class="contact-links">
      <?php
        $icon = 0;
        foreach($page->links as $link)
        {
          switch ($icon) {
            case '0':
              echo "<div>";
              echo "<a class='contact-link icon-envelope' href='{$link->link_url}'>{$link->link_label}</a>";
              echo "</div>";
              break;

            case '1':
              echo "<div>";
              echo "<a class='contact-link icon-twitter' target='_blank' href='{$link->link_url}'>{$link->link_label}</a>";
              echo "</div>";
              break;

              case '2':
              echo "<div>";
              echo "<a class='contact-link icon-linkedin-sign' target='_blank' href='{$link->link_url}'>{$link->link_label}</a>";
              echo "</div>";
              break;
          }
          $icon++;
        }
       ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="span7">
    <?php if ($error == 0) echo "<p class='success'>Your message has travelled through the interwebs and I've got it. I'll reply asap.</p>";?>
    <form class="form-horizontal" action="./" method="post" data-validate="parsley">
      <div class="control-group">
        <?php if($nameEmpty) echo "<p class='error no-name icon-bug'>I'm going to need your name</p>"; ?>
        <label for="inputName" class="control-label">Your name</label>
        <div class="controls">
          <input class="span5" type="text" id="inputName" name="inputName" data-trigger="change" data-required="true"  data-error-message="I'm going to need your name"<?php if(isset($form[inputName]))  echo "value=$form[inputName]";?>>
        </div>
      </div>
      <div class="control-group">
        <?php if($emailEmpty) echo "<p class='error no-email icon-bug'>Without an email I can't reply to you!</p>";?>
        <label for="inputEmail" class="control-label">Your email</label>
        <div class="controls">
          <input class="span5" type="text" id="inputEmail" name="inputEmail" data-trigger="change" data-type="email" data-required="true"  data-error-message="Without an email I can't reply to you!"<?php if(isset($form[inputEmail]))  echo "value=$form[inputEmail]";?>>
        </div>
      </div>
      <div class="control-group input-message">
        <?php if($messageEmpty) echo "<p class='error no-message icon-bug'>You left the message empty, at least say hi!</p>"; ?>
        <label for="inputMessage" class="control-label">Message</label>
        <div class="controls">
          <textarea class="span5" id="inputMessage" name="inputMessage" data-minlength="15" data-required="true" rows="5" data-error-message="You left the message empty or it's too short, at least say hi!"><?php if(isset($form[inputMessage]))  echo $form[inputMessage]; ?></textarea>
        </div>
      </div>
      <div class="form-actions">
        <div class="icon-paperplane">
          <input type="submit" value="Send" id="submit" name="submit">
        </div>
      </div>
    </form>
  </div>
</div>

<div class="row visible-tablet visible-desktop">
  <?php include("./menu.php"); ?>
</div>

<?php include("./footer.php"); ?>