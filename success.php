<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $session = $_SESSION['id'];
?>

<?php
  // if ($universal->isLoggedIn() == false) {
  //   header('Location: '.DIR);
  // }
?>

<?php
  $title = "Thanks for registering • Stomigram";
  $keywords = "Stomigram, Share and capture world's moments, share, capture, about";
  $desc = "Stomigram lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="keywords" content=<?php echo $keywords; ?>>
    <meta name="description" content=<?php echo $desc; ?>>
    <meta name="author" content="Stomigram, Clinton Ratemo">
    <link rel="shortcut icon" href="images/favicon/favicon.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/css/master.css">
  </head>
  <body>

    <div class="index_header">
      <div class="logo">
        <img src="images/needs/sto.PNG" alt="">
        <hr>
        <!-- <img src="images/needs/Snap 2017-01-29 at 18.32.04.jpg" alt=""> -->
        <span>Stomigram</span>
      </div>
      <div class="right">
        <a href="<?php echo DIR; ?>/" class="">Home</a>
        <a href="<?php echo DIR; ?>/profile/<?php echo $universal->GETsDetails($session, "username"); ?>" class="">Profile</a>
        <a href="<?php echo DIR; ?>/about">About</a>
        <a href="<?php echo DIR; ?>/help">Help</a>
      </div>
    </div>


<div class="badshah">

  <div class="about_div inst success_div">
    <img src="<?php echo DIR; ?>/images/needs/sto.PNG" alt="">
    <div class="">
      <span>Thanks for registering.</span>
      <span>Stomigram experience on Ratemo Universe</span>
      <span>Verify Email and experience uninterrupted experience.</span>
      <div class="dev_div_links">
        <a href="<?php echo DIR; ?>/profile/<?php echo $universal->GETsDetails($session, "username"); ?>" class="sec_btn">Continue</a>
      </div>
    </div>
  </div>

</div>

<?php include 'index_include/index_footer.php'; ?>
