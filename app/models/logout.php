<?php
//start session.
session_start();
$_SESSION = array();
session_destroy();
header("Location: /../public/index.php?logout=success");

?>..