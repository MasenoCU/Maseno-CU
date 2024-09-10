<?php
//start session.
session_start();
$_SESSION = array();
session_destroy();
header("Location: /../index.php?logout=success");

?>..