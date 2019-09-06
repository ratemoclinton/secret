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
  $title = "{$noti->titleNoti()} Help for you • Stomigram";
  $keywords = "Stomigram, Share and capture world's moments, share, capture, help";
  $desc = "Stomigram allows you to share, view, record, capture life moments, photos, videos, music, art, animals, movies, sport and explore what everyone is doing and talking about on the entire universe.";
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

  <div class="banner">
    <img src="<?php echo DIR; ?>/images/needs/rat.PNG" alt="">
  </div>SUPPORT CENTRE clintonbrucy@gmail.com

   <div class="banner">
    <img src="<?php echo DIR; ?>/images/needs/log.PNG" alt="">
    <!-- <img src="http://chicohq.com/images/bg.svg" alt=""> -->
  </div>
  <span>
    SUPPORT CENTRE clintonbrucy@gmail.com
  </span>
</div>


<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
