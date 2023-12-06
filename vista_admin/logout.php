<?php
session_start();
session_unset();
session_destroy();
header("index1.php");
exit;

?>
