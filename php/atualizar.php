<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZANDO</title>
</head> <?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_e = $_POST["id_e"];
        $nome_e = $_POST["nome_e"];
        $cnpj = $_POST["cnpj"];
        $user_e = $_POST["user_e"];
        $senha_e = $_POST["senha_e"];

        if($nome_e != "" && $cnpj != "" && $user_e != "" && $senha_e != ""){
        $sql = "UPDATE tab_empresas SET nome_e = '$nome_e', cnpj = '$cnpj', user_e = '$user_e', senha_e = '$senha_e' WHERE id_e = '$id_e'";
        if ($conn->query($sql) === TRUE) {
            mkdir("../relat/".$cnpj);
            echo"<script>alert('EMPRESA ATUALIZADA COM SUCESSO!');history.go(-2);</script>";
        } else {
            echo "Erro ao atualizar cliente: " . $conn->error;
        }
     } else {
             echo"<script>alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS!');history.go(0);</script>";
            header("refresh:2;url=index.php");
        }
        }
    $conn->close();
?>