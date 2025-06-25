<?php
session_start();
session_destroy();
header("Location: proje.php");
exit();
?>
