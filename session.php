<?php
session_start();
if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header("Location: ./index.php");
}
$logado = $_SESSION['username'];
?>