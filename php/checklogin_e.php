<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHECKING</title>
 
</head> <?php

$user_e = $_POST["user_e"];
$senha_e = $_POST["senha_e"];
$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"controle");
$verifica = mysqli_query($connect, "SELECT * FROM tab_empresas WHERE user_e = '$user_e' AND senha_e = '$senha_e'")
    or die("Erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
        echo "<script>alert('USUÁRIO OU SENHA INCORRETOS!');history.back();</script>";
        header("refresh:2;url=index.php");
        die();
    }else{
        $query_select = "SELECT id_e, nome_e FROM tab_empresas WHERE user_e = '$user_e'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$idarray = $array["id_e"];
        @$nomearray = $array["nome_e"];
        setcookie("nome_e",$nomearray);
        setcookie("id_e",$idarray);
        header("Location:indexemp.php");
    }