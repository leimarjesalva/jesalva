<?php
session_start();
session_unset();
session_destroy();
header("location: login.html");
?>

<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("location: login.html");
    exit();
}


?>
