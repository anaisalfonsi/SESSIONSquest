<?php require 'inc/head.php'; ?>
<?php
//session_start() dans le head;
$_SESSION = array();

session_destroy();

?>

<div class="container-fluid text-left">
    <h3>Vous êtes déconnectée !</h3><h2><a href="login.php">Se reloguer</a>


<?php require 'inc/foot.php'; ?>