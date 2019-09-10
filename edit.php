<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $tags = new tags;
  $noti = new notifications;
  $message = new message;
?>

<?php
  if ($universal->isLoggedIn() == false) {
    header('Location:'. DIR .'/welcome');
  }
  $session = $_SESSION['id'];
?>

<?php
  // FOR DELETING EMPTY TAGS
  $tags->filterTags();
?>

<?php
  $title = "{$noti->titleNoti()} Edit profile (@".$universal->getUsernameFromSession().") • Stomigram";
  $keywords = "Stomigram, experience it on Ratemo Universe, home";
  $desc = "Stomigram allows you to share, view, record, capture life moments, photos, videos, music, art, animals, movies, sport and explore what everyone is doing and talking about on the entire universe.";
?>

<!-- including files for header of document -->
<?php include_once 'includes/header.php'; ?>
<?php include_once 'needs/heading.php'; ?>
<?php include_once 'needs/nav.php'; ?>

<div class="user_info" data-userid="<?php echo $session; ?>" data-sessionid="<?php echo $session; ?>" data-username="<?php echo $universal->getUsernameFromSession(); ?>"></div>

<div class="overlay"></div>
<div class="overlay-2"></div>
<div class="notify"><span></span></div>
<div class="badshah">
  <?php include 'ajaxify/edit_profile/edit_profile.php'; ?>
</div>

<?php include 'needs/emojis.php'; ?>
<?php include_once 'needs/search.php'; ?>

<?php
  // $help = array("You can press <b>Enter</b> to save");
  // include_once 'needs/tip.php';
?>

<!-- including the footer of the document -->
<?php include_once 'includes/footer.php'; ?>
<script type="text/javascript">
  $(function(){

    $('.edit_un_text').focus();

    $('.m_n_a').removeClass('active');
    LinkIndicator('edit');

    $('.edit_update > span').description({
      extraTop: -5,
      extraLeft: 5
    });

  });
</script>
