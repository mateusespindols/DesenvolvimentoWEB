<?php
include 'conexao.php';

if (isset($_POST['bt_verificar'])) {
    $user = $_POST["txt_user"]; 
    $email = $_POST["txt_email"];
    $senha = $_POST["txt_senha"];
    $confSenha = $_POST["conf_senha"];

 
    if ($senha !== $confSenha) {
        echo "<center><hr> As senhas nao conferem!<hr></center>";
        return;
    }

    if (strlen($senha) < 6) {
        echo "<center><hr> A senha deve ter pelo menos 6 caracteres!<hr></center>";
        exit;
    }

    $sql_verifica = mysql_query("SELECT * FROM tbl_login 
                                WHERE user = '$user' OR email = '$email'");

    if (mysql_num_rows($sql_verifica) > 0) {
        echo "<center><hr> CONTA JA EXISTE!<hr></center>";
    } else {
      
        $sql_insere = mysql_query("INSERT INTO tbl_login (user, email, senha) 
                                  VALUES ('$user', '$email', '$senha')");
        
        if ($sql_verifica) {
            echo "<center><hr> CONTA CRIADA COM SUCESSO!<hr></center>";
        } else {
            echo "<center><hr> ERRO AO CRIAR CONTA: " . mysql_error() . "<hr></center>";
        }
    }
}
?>