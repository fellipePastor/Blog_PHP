<?php


session_start();
unset($_SESSION['autor']);
session_destroy();
header("Location:../index.php");



?>