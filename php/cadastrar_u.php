<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRANDO</title>
</head> <?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome_u = $_POST["nome_u"];
        $nome_u = strtoupper($nome_u);
        $user_u = $_POST["user_u"];
        $senha_u = $_POST["senha_u"];

        $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"controle");

        $query_select = "SELECT user_u FROM tab_usuarios WHERE user_u = '$user_u'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$user_uarray = $array["user_u"];
        if($user_uarray == $user_u){
            echo"<script>alert('O USUÁRIO JÁ ESTÁ EM USO!');history.back();</script>";            
        }

        elseif($nome_u != "" && $user_u != "" && $senha_u != ""){
        $sql = "INSERT INTO tab_usuarios (nome_u, user_u, senha_u) VALUES ('$nome_u', '$user_u', '$senha_u')";
    
        if ($conn->query($sql) === TRUE) {
            echo"<script>alert('USUÁRIO CADASTRADO COM SUCESSO!');history.go(-2);</script>";
        }else{
            echo"<script>alert('ERRO AO CADASTRAR USUÁRIO');history.back();</script>" . $conn->error;
        }
        }else{
            echo"<script>alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS');history.back();</script>";
        }
    }
$conn->close();