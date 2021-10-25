<?php

session_start();
if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
    $login = addslashes($_POST['username']);
    $senha = addslashes($_POST['password']);
    if($login == "marcus" && $senha == "123"){
        
        $_SESSION['username'] = $login;
        $_SESSION['password'] = $senha;
        header("Location: Painel.php"); //caminho caso o login esteja correto
    }else{
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}