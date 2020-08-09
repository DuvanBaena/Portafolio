<?php
session_start();
if ($_SESSION['i_id']=="") header("Location:login.php");
?>