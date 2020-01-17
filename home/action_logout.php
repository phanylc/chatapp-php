<?php
session_start();
session_unset();
header("location: /home/login.php");
?>