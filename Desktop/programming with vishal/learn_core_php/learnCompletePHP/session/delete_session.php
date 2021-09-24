<?php 
session_start();

//for specific delete session
unset($_SESSION['x']);

//for  delete all session
session_destroy();

?>