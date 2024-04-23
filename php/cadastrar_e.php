<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRANDO</title>
</head> <?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome_e = $_POST["nome_e"];
        $nome_e = strtoupper($nome_e);
        $cnpj = $_POST["cnpj"];
        $user_e = $_POST["user_e"];
        $senha_e = $_POST["senha_e"];
        $nome_pasta = $_POST["cnpj"];

        $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"controle");

        $query_select = "SELECT user_e FROM tab_empresas WHERE user_e = '$user_e'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$user_earray = $array["user_e"];
        if($user_earray == $user_e){
            echo"<script>alert('O USUÁRIO JÁ ESTÁ EM USO!');history.back();</script>";            
        }

        $query_select = "SELECT cnpj FROM tab_empresas WHERE cnpj = '$cnpj'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$cnpjarray = $array["cnpj"];
        if($cnpjarray == $cnpj){
            echo"<script>alert('O CNPJ JÁ ESTÁ EM USO!');history.back();</script>";            
        }

        elseif($nome_e != "" && $cnpj != "" && $user_e != "" && $senha_e != ""){
        $sql = "INSERT INTO tab_empresas (nome_e, cnpj, user_e, senha_e) VALUES ('$nome_e', '$cnpj', '$user_e', '$senha_e')";
    
        if ($conn->query($sql) === TRUE) {
            mkdir("../relat/".$cnpj);
            echo"<script>alert('EMPRESA CADASTRADA COM SUCESSO!');history.back();</script>";
            
        }else{
            echo"<script>alert('ERRO AO CADASTRAR EMPRESA');history.back();</script>" . $conn->error;
        }
        }else{
            echo"<script>alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS');history.back();</script>";
        }
    }
$conn->close();