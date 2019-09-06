<?php
  $title = "Forgot password • Stomigram";
  $keywords = "Stomigram, Share and capture world's moments, share, capture, share, login, forgot password";
  $desc = "Stomigram allows you to share, view, record, capture life moments, photos, videos, music, art, animals, movies, sport and explore what everyone is doing and talking about on the entire universe.";
?>

<?php include 'index_include/index_header.php'; ?>
<div class="notify"><span></span></div>
<div class="forgot">
  <div class="forgot_info">
    <span>Password retrieval</span>
  </div>
  <div class="forgot_main">
    <form class="forgot_form" action="" method="post">
      <span>Please enter the email you registered with</span>
      <input type="text" name="forgot_text" value="" placeholder="Your email.." required spellcheck="false" autofocus class="forget_text" id="forget_text">
      <input type="submit" name="forgot_submit" value="Recover" class="f_p_submit">
    </form>
  </div>
</div>

<div class="overlay-2"></div>

<?php include 'index_include/index_footer.php'; ?>
<script type="text/javascript">
  $('.forgot').passwordRetrieval();
</script>
