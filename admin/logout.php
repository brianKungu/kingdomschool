<?php
require_once('connect.php');
session_destroy();
header("refresh:0;url=login.php");
echo "Logging out...Please Wait...";
?>