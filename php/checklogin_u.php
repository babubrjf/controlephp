<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHECKING</title>
 
</head> <?php

$user_u = $_POST["user_u"];
$senha_u = $_POST["senha_u"];
$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"controle");
$verifica = mysqli_query($connect, "SELECT * FROM tab_usuarios WHERE user_u = '$user_u' AND senha_u = '$senha_u'")
    or die("Erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
        echo "<script>alert('USUÁRIO OU SENHA INCORRETOS!');history.back();</script>";
        header("refresh:2;url=index.php");
        die();
    }else{
        $query_select = "SELECT nome_u FROM tab_usuarios WHERE user_u = '$user_u'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$nomearray = $array["nome_u"];
        setcookie("nome_u",$nomearray);
        header("Location:index.php");
    }
?>