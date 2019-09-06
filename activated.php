<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $noti = new notifications;
  $message = new message;
?>

<?php
  if (!$universal->isLoggedIn()) {
    header('Location: '.DIR.'/login');
  }
?>

<?php
  $title = "Email activation!! • Stomigram";
  $keywords = "Stomigram, live in Ratemo Universe and share about it across the entire web, about";
  $desc = "Stomigram allows you to share, view, record, capture life moments, photos, videos, music, art, animals, movies, sport and explore what everyone is doing and talking about on the entire web."
?>

<?php 
  include 'includes/header.php';
  include 'needs/heading.php';
  include 'needs/nav.php';
?>

<div class="badshah">

  <div class="about_div inst thanks_div">
    <img src="<?php echo DIR; ?>/images/needs/sto.PNG" alt="">
    <div class="">
      <span>
        <?php 
            $e_v = $universal->e_verified($_SESSION['id']);
            if($e_v){
                echo "Your email has already been verified!!";
            } else {
                echo "Your email has been verified!!";
            }
        ?>
      </span>
    </div>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
