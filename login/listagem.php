<?php
include 'conexao.php';

if (isset($_POST['busca_nome']) && $_POST['busca_nome'] != '') {
    $sql = mysql_query("SELECT * FROM tbl_login WHERE user LIKE '" . $_POST['busca_nome'] . "%' ORDER BY user ASC"); 
} else {
    $sql = mysql_query("SELECT * FROM tbl_login ORDER BY user ASC");
}

if (isset($_GET['apagar'])) {
    $sql = mysql_query("DELETE FROM tbl_login WHERE user = '" . $_GET['apagar'] . "'");
    echo "<br>";
    echo "<center>";
    echo "<hr>";
    echo "USUÁRIO EXCLUÍDO COM SUCESSO!!!";
    echo "<br><br>";
    echo "<a href=\"listagem.php\">VOLTAR</a>";
    echo "<hr>";
    return false;
}
?>

<html>
<head>
    <meta charset="utf-8"> 
</head>
<body>
<center>
    <form name="form1" method="POST" action="listagem.php">
        <label>DIGITE UM USUÁRIO:</label>
        <input type="text" name="busca_nome">
        <input type="submit" value="FILTRAR">
    </form>

    <table border="1" align="center">
        <tr>
            <th colspan="6" bgcolor="MediumAquamarine">LISTAGEM DE CONTAS</th>
        </tr>
        <tr>
            <th bgcolor="LightGreen">USUÁRIO</th>
            <th bgcolor="LightGreen">EMAIL</th>
            <th bgcolor="LightGreen">SENHA</th>
            <th colspan="2" bgcolor="LightGreen">AÇÃO</th>
        </tr>

        <?php
        while ($linha = mysql_fetch_assoc($sql)) {
        ?>
            <tr>
                <th><?php echo $linha['user']; ?></th>
                <th><?php echo $linha['email']; ?></th>
                <th><?php echo $linha['senha']; ?></th>
                <th><img src="deletar.png"></th>
                <th><img src="deletar.png"></th>
            </tr>
        <?php 
        }
        echo "<br>";
        echo "<center>";
        echo "<br>";
        echo "<a href=\"login.php\">RETORNAR AO LOGIN</a>";
        echo "<br>";
        ?>
    </table>
</center>    
</body>
</html>