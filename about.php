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
  $title = "{$noti->titleNoti()} About • Stomigram";
  $keywords = "Stomigram, experience and share new lifestyle on Ratemo Universe, about";
  $desc = "Stomigram allows you to share, view, record, capture life moments, photos, videos, music, art, animals, movies, sport and explore what everyone is doing and talking about on the entire universe. ";
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

  <div class="about_div inst">
    <img src="<?php echo DIR; ?>/images/needs/log.PNG" alt="">
    <div class="">
      <span>Stomigram is where you explore music, art, animals, sport, celebrity gossip, space and science, better than instagram and tumblr.</span>
      <span>Developed by Ratemo Universe Copyright Issues and Licencing.</span>
      <span>Updates on story viewing coming soon.</span>
    </div>
  </div>

</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
