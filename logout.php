<?php
session_start();

session_destroy();

echo "<script> window.open ('newIndex.php','_self') </script>";

?>