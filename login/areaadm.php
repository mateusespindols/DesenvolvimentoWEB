  <meta charset="utf-8"> 
<?php
include 'conexao.php';


   $login = $_POST["login"];

    $senha = $_POST["txt_senha"];
  
$sql= mysql_query("SELECT * FROM tbl_login 
                          WHERE (user = '$login' OR email = '$login') AND senha = '$senha'");


    if (mysql_num_rows($sql) > 0) {
        echo "<center><hr> CONTA LOGADA COM SUCESSO!<hr></center>";
        echo "<br>";
        echo "<br>";
        echo "<a href=\"listagem.php\">LISTA DE CONTAS </a>";

        header('location.listagem.php');
    } else {
         echo "<center><hr> CONTA INVÁLIDA!<hr></center>";
        echo "<br>";
        echo "<br>";
        echo "<a href=\"cadastrarcliente.php\">CADASTRAR NOVA CONTA </a>";
    }
?>

