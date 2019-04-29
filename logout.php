<?php
require_once('connect.php');
session_destroy();
header("refresh:0;url=index.html");
echo "Logging out...Please Wait...";
?>