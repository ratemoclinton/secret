<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $post = new post;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} Developer • Stomigram";
  $keywords = "Stomigram, Share and capture world's moments, share, capture, about";
  $desc = "Stomigram lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!-- including files for header of document -->
<?php
  if ($universal->isLoggedIn()) {
    include 'includes/header.php';
    include 'needs/heading.php';
    include 'needs/nav.php';
    include_once 'needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include 'index_include/index_header.php';
  }
?>

<div class="overlay"></div>
<div class="notify"><span></span></div>
<div class="badshah">

  <div class="dev_div inst">
    <img src="<?php echo DIR; ?>/images/needs/rat.PNG" alt="">
    <span style="color: green">Developed by <a href="<?php echo DIR; ?>/profile/ratemo">Clinton Ratemo</a> Universe. Powered by inspirations from space stories and science.</span>

    <span style="color: black">
      RATEMO 
    </span>

    <span style="color: black">
      UNIVERSE
    </span>
    <span style="color: black">Hire Ratemo Universe to create a new horizon for you</span>
    <div class="dev_div_links">
      <a style="color: green" href="https://www.facebook.com/stomigram/?ref=bookmarks/" class="sec_btn">Facebook</a>
      <a style="color: green" href="https://www.instagram.com/ratemoclint10/" class="sec_btn">Instagram</a>
      <a style="color: green" href="https://twitter.com/clintonbrucy" class="sec_btn">Twitter</a>
    </div>
    <iframe src="https://ghbtns.com/github-btn.html?user=ratemoclinton&type=follow&count=false&size=large" frameborder="0" scrolling="0" width="220px" height="30px"></iframe>
  </div>

</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
