<?php
require_once("connection.php");
session_start();
unset($_SESSION['login']);
header('Location: ../index.php');
?>