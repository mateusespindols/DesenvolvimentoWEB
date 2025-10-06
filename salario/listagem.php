<?php
include 'conexao.php'; // cria $conn

// ---------- FILTRO DE BUSCA ----------
if (isset($_POST['busca_nome']) && $_POST['busca_nome'] != '') {
    $busca = $_POST['busca_nome'];
    $sql = mysqli_query($conn, "SELECT * FROM tb_funcionarios WHERE Nome_Func LIKE '$busca%' ORDER BY Nome_Func ASC");
} else {
    $sql = mysqli_query($conn, "SELECT * FROM tb_funcionarios ORDER BY Nome_Func ASC");
}

// ---------- EXCLUSÃO ----------
if (isset($_GET['apagar'])) {
    $apagar = $_GET['apagar'];
    mysqli_query($conn, "DELETE FROM tb_funcionarios WHERE N_Registros = '$apagar'");
    echo "<center><hr>USUÁRIO EXCLUÍDO COM SUCESSO!!!<br><br>
          <a href='listagem.php'>VOLTAR</a><hr></center>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Listagem de Funcionários</title>
</head>
<body>
<center>
    <!-- ---------- FORMULÁRIO DE FILTRO ---------- -->
    <form name="form1" method="POST" action="listagem.php">
        <label>DIGITE UM FUNCIONÁRIO:</label>
        <input type="text" name="busca_nome">
        <input type="submit" value="FILTRAR">
        <input type="submit" name="Voltar" value="VOLTAR" onclick="document.form1.action='funcionarios.php'">
    </form>

    <!-- ---------- TABELA DE FUNCIONÁRIOS ---------- -->
    <table border="1" align="center">
        <tr>
            <th colspan="8" bgcolor="gold">LISTAGEM DE FUNCIONÁRIOS</th>
        </tr>
        <tr>
            <th bgcolor="Yellow">N_Registros</th>
            <th bgcolor="Yellow">Nome_Func</th>
            <th bgcolor="Yellow">Data Admissão</th>
            <th bgcolor="Yellow">Cargo</th>
            <th bgcolor="Yellow">Salário Bruto</th>
            <th bgcolor="Yellow">INSS</th>
            <th bgcolor="Yellow">Salário Líquido</th>
            <th bgcolor="Yellow">Apagar</th>
        </tr>

        <?php while ($linha = mysqli_fetch_assoc($sql)) { ?>
        <tr>
            <td align="center"><?php echo $linha['N_Registros']; ?></td>
            <td align="center"><?php echo $linha['Nome_Func']; ?></td>
            <td align="center"><?php echo $linha['data_admissao']; ?></td>
            <td align="center"><?php echo $linha['cargo']; ?></td>
            <td align="right"><?php echo number_format($linha['salario_bruto'], 2, ',', '.'); ?></td>
            <td align="right"><?php echo number_format($linha['inss'], 2, ',', '.'); ?></td>
            <td align="right"><?php echo number_format($linha['salario_liquido'], 2, ',', '.'); ?></td>
            <td align="center">
                <a href="listagem.php?apagar=<?php echo $linha['N_Registros']; ?>">
                    <img src="images.png" width="25" alt="Apagar">
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</center>
</body>
</html>
