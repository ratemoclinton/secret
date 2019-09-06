<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
?>

<?php
  if ($universal->isLoggedIn()) {
    header('Location: '.DIR);
  }
?>

<?php
  $title = "Thanks for registering • Stomigram";
  $keywords = "Stomigram, Share and capture world's moments, share, capture, about";
  $desc = "Stomigram lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<?php include 'index_include/index_header.php'; ?>

<div class="badshah">

  <div class="about_div inst thanks_div">
    <img src="<?php echo DIR; ?>/images/needs/sto.PNG" alt="">
    <div class="">
      <span>A message has been sent to you email. Check your inbox and click on the link provided in the message to retrieve your account. If message is not visble trying to search in spam folder and add our email to your account for future letters. </span>
      <span style="color: green">Welcome from <a href="<?php echo DIR; ?>/profile/ratemo">Clinton Ratemo</a> Universe. Powered by inspirations from space stories and science.</span>
    </div>
  </div>

</div>

<?php include 'index_include/index_footer.php'; ?>
