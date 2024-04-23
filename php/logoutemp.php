<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGOUT</title>
 
</head>

<?php
    @$nome_cookie = $_COOKIE["nome_e"];
    @$ide_cookie = $_COOKIE["id_e"];
    if(isset($nome_cookie)){
        unset($nome_cookie);
        setcookie("nome_e","",-1);
        unset($ide_cookie);
        setcookie("id_e","",-1);
        header("refresh:1;url=index.php");
    }
?>
<script>alert('VOCÊ DESLOGOU DO SISTEMA!');refresh:0.5;</script>