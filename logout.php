<?php   

session_destroy(); //destroy the session
header("location:/Banker/index.php"); //to redirect back to "index.php" after logging out
?>